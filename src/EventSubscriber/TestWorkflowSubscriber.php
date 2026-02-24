<?php

namespace App\EventSubscriber;

use App\Entity\TestPassage;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Workflow\Event\Event;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class TestWorkflowSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EntityManagerInterface $em,
        private MailerInterface $mailer,
        private LoggerInterface $logger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            // GUARDS : Vérifications AVANT la transition
            'workflow.test_passage.guard.demarrer' => 'guardDemarrer',
            'workflow.test_passage.guard.expirer' => 'guardExpirer',
            
            // ENTERED : Actions APRÈS être entré dans un état
            'workflow.test_passage.entered.en_cours' => 'onEnCours',
            'workflow.test_passage.entered.termine' => 'onTermine',
            'workflow.test_passage.entered.expire' => 'onExpire',
            'workflow.test_passage.entered.en_pause' => 'onEnPause',
        ];
    }

    // ===== GUARDS (Vérifications) =====
    
    public function guardDemarrer(GuardEvent $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        // ✅ CORRECTION : Exclure le passage actuel de la vérification
        $existingPassage = $this->em->getRepository(TestPassage::class)
            ->createQueryBuilder('tp')
            ->where('tp.user = :user')
            ->andWhere('tp.test = :test')
            ->andWhere('tp.statut = :statut')
            ->andWhere('tp.id != :currentId')  // ✅ AJOUT IMPORTANT
            ->setParameter('user', $passage->getUser())
            ->setParameter('test', $passage->getTest())
            ->setParameter('statut', 'en_cours')
            ->setParameter('currentId', $passage->getId() ?: 0)  // ✅ AJOUT IMPORTANT
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($existingPassage) {
            $event->setBlocked(true, 'Vous avez déjà un test en cours.');
            $this->logger->warning('Tentative de démarrage multiple', [
                'user' => $passage->getUser()->getId(),
                'test' => $passage->getTest()->getId()
            ]);
        }
    }

    public function guardExpirer(GuardEvent $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        // Vérifier que le temps est vraiment écoulé
        $duree = $passage->getTest()->getDureeEstimee() ?: 15;
        $tempsEcoule = (new \DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp();
        
        if ($tempsEcoule < $duree * 60) {
            $event->setBlocked(true, 'Le temps n\'est pas encore écoulé.');
        }
    }

    // ===== ACTIONS (Déclenchées automatiquement) =====
    
    public function onEnCours(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $this->logger->info('Test démarré', [
            'passage_id' => $passage->getId(),
            'user' => $passage->getUser()->getEmail(),
            'test' => $passage->getTest()->getTitre()
        ]);
        
        // Enregistrer l'heure de début si pas déjà fait
        if (!$passage->getDateDebut()) {
            $passage->setDateDebut(new \DateTime());
        }
    }

    public function onTermine(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $this->logger->info('Test terminé', [
            'passage_id' => $passage->getId(),
            'score' => $passage->getResultat()
        ]);
        
        // 1. Enregistrer la date de fin
        if (!$passage->getDateFin()) {
            $passage->setDateFin(new \DateTime());
        }
        
        // 2. Calculer le temps passé
        if ($passage->getDateDebut()) {
            $temps = (new \DateTime())->getTimestamp() - $passage->getDateDebut()->getTimestamp();
            $passage->setTempsPasse($temps);
        }
        
        // 3. Envoyer un email
        $this->sendResultEmail($passage);
        
        // 4. Mettre à jour la progression de l'utilisateur
        $this->updateUserProgress($passage);
        
        // 5. Vérifier et attribuer des badges
        $this->checkBadges($passage);
    }

    public function onExpire(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $this->logger->warning('Test expiré', [
            'passage_id' => $passage->getId(),
            'user' => $passage->getUser()->getEmail()
        ]);
        
        // Score 0 pour expiration
        $passage->setScore(0);
        $passage->setResultat(0);
        $passage->setDateFin(new \DateTime());
        
        // Email de notification
        $email = (new Email())
            ->from('noreply@fluently.com')
            ->to($passage->getUser()->getEmail())
            ->subject('⏰ Test expiré - ' . $passage->getTest()->getTitre())
            ->html('<p>Malheureusement, le temps est écoulé. Votre test a été soumis automatiquement avec un score de 0.</p>');
        
        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email expiration', ['error' => $e->getMessage()]);
        }
    }

    public function onEnPause(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();

        $this->logger->info('Test mis en pause avec succès', [
            'passage_id' => $passage->getId(),
            'user_id' => $passage->getUser()->getId(),
            'test_id' => $passage->getTest()->getId()
        ]);
    }

    // ===== MÉTHODES HELPER =====
    
    private function sendResultEmail(TestPassage $passage): void
    {
        $niveau = $this->determinerNiveau($passage->getResultat());
        
        $email = (new Email())
            ->from('noreply@fluently.com')
            ->to($passage->getUser()->getEmail())
            ->subject('✅ Résultats de votre test - ' . $passage->getTest()->getTitre())
            ->html(sprintf(
                '<h2>Félicitations !</h2>
                <p>Vous avez terminé le test : <strong>%s</strong></p>
                <p>Score : <strong>%.1f%%</strong></p>
                <p>Niveau estimé : <strong>%s</strong></p>
                <p>Temps passé : <strong>%d minutes</strong></p>
                <a href="https://fluently.com/test/result/%d">Voir les détails</a>',
                $passage->getTest()->getTitre(),
                $passage->getResultat(),
                $niveau,
                floor($passage->getTempsPasse() / 60),
                $passage->getId()
            ));
        
        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->logger->error('Erreur envoi email résultat', ['error' => $e->getMessage()]);
        }
    }

    private function updateUserProgress(TestPassage $passage): void
    {
        // Mettre à jour UserProgress si c'est un test de niveau
        if ($passage->getTest()->getType() === 'Test de niveau') {
            $progress = $this->em->getRepository(\App\Entity\UserProgress::class)
                ->findOneBy([
                    'user' => $passage->getUser(),
                    'langue' => $passage->getTest()->getLangue()
                ]);
            
            if ($progress) {
                $progress->setTestNiveauComplete(true);
                $progress->setDateDerniereActivite(new \DateTime());
            }
        }
    }

    private function checkBadges(TestPassage $passage): void
    {
        // TODO: Implémenter système de badges
        // Ex: Badge "Perfectionniste" si score = 100%
        if ($passage->getResultat() >= 100) {
            $this->logger->info('Badge "Perfectionniste" débloqué !', [
                'user' => $passage->getUser()->getId()
            ]);
        }
    }

    private function determinerNiveau(float $score): string
    {
        if ($score >= 90) return 'C2';
        if ($score >= 80) return 'C1';
        if ($score >= 70) return 'B2';
        if ($score >= 60) return 'B1';
        if ($score >= 50) return 'A2';
        return 'A1';
    }
}