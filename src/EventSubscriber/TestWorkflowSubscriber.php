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
            'workflow.test_passage.guard.demarrer' => 'guardDemarrer',
            'workflow.test_passage.guard.expirer' => 'guardExpirer',
            'workflow.test_passage.entered.en_cours' => 'onEnCours',
            'workflow.test_passage.entered.termine' => 'onTermine',
            'workflow.test_passage.entered.expire' => 'onExpire',
            'workflow.test_passage.entered.en_pause' => 'onEnPause',
        ];
    }

    public function guardDemarrer(GuardEvent $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $user = $passage->getUser();
        $test = $passage->getTest();
        
        // ✅ PROTECTION
        if (!$user || !$test) {
            return;
        }
        
        $existingPassage = $this->em->getRepository(TestPassage::class)
            ->createQueryBuilder('tp')
            ->where('tp.user = :user')
            ->andWhere('tp.test = :test')
            ->andWhere('tp.statut = :statut')
            ->andWhere('tp.id != :currentId')
            ->setParameter('user', $user)
            ->setParameter('test', $test)
            ->setParameter('statut', 'en_cours')
            ->setParameter('currentId', $passage->getId() ?: 0)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($existingPassage) {
            $event->setBlocked(true, 'Vous avez déjà un test en cours.');
            $this->logger->warning('Tentative de démarrage multiple', [
                'user' => $user->getId(),
                'test' => $test->getId()
            ]);
        }
    }

    public function guardExpirer(GuardEvent $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $test = $passage->getTest();
        $dateDebut = $passage->getDateDebut();
        
        // ✅ PROTECTION
        if (!$test || !$dateDebut) {
            return;
        }
        
        $duree = $test->getDureeEstimee() ?: 15;
        $tempsEcoule = (new \DateTime())->getTimestamp() - $dateDebut->getTimestamp();
        
        if ($tempsEcoule < $duree * 60) {
            $event->setBlocked(true, 'Le temps n\'est pas encore écoulé.');
        }
    }

    public function onEnCours(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $user = $passage->getUser();
        $test = $passage->getTest();
        
        // ✅ PROTECTION
        if (!$user || !$test) {
            return;
        }
        
        $this->logger->info('Test démarré', [
            'passage_id' => $passage->getId(),
            'user' => $user->getEmail(),
            'test' => $test->getTitre()
        ]);
        
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
        
        if (!$passage->getDateFin()) {
            $passage->setDateFin(new \DateTime());
        }
        
        $dateDebut = $passage->getDateDebut();
        if ($dateDebut) {
            $temps = (new \DateTime())->getTimestamp() - $dateDebut->getTimestamp();
            $passage->setTempsPasse($temps);
        }
        
        $this->sendResultEmail($passage);
        $this->updateUserProgress($passage);
        $this->checkBadges($passage);
    }

    public function onExpire(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $user = $passage->getUser();
        $test = $passage->getTest();
        
        // ✅ PROTECTION
        if (!$user || !$test) {
            return;
        }
        
        $this->logger->warning('Test expiré', [
            'passage_id' => $passage->getId(),
            'user' => $user->getEmail()
        ]);
        
        $passage->setScore(0);
        $passage->setResultat(0);
        $passage->setDateFin(new \DateTime());
        
        $userEmail = $user->getEmail();
        if ($userEmail) {
            $email = (new Email())
                ->from('noreply@fluently.com')
                ->to($userEmail)
                ->subject('⏰ Test expiré - ' . $test->getTitre())
                ->html('<p>Malheureusement, le temps est écoulé.</p>');
            
            try {
                $this->mailer->send($email);
            } catch (\Exception $e) {
                $this->logger->error('Erreur envoi email expiration', ['error' => $e->getMessage()]);
            }
        }
    }

    public function onEnPause(Event $event): void
    {
        /** @var TestPassage $passage */
        $passage = $event->getSubject();
        
        $user = $passage->getUser();
        $test = $passage->getTest();
        
        // ✅ PROTECTION
        if (!$user || !$test) {
            return;
        }

        $this->logger->info('Test mis en pause', [
            'passage_id' => $passage->getId(),
            'user_id' => $user->getId(),
            'test_id' => $test->getId()
        ]);
    }

    private function sendResultEmail(TestPassage $passage): void
    {
        $user = $passage->getUser();
        $test = $passage->getTest();
        
        // ✅ PROTECTION
        if (!$user || !$test) {
            return;
        }
        
        $resultat = $passage->getResultat() ?? 0.0;
        $niveau = $this->determinerNiveau($resultat);
        
        $userEmail = $user->getEmail();
        if (!$userEmail) {
            return;
        }
        
        $email = (new Email())
            ->from('noreply@fluently.com')
            ->to($userEmail)
            ->subject('✅ Résultats - ' . $test->getTitre())
            ->html(sprintf(
                '<h2>Félicitations !</h2>
                <p>Test : <strong>%s</strong></p>
                <p>Score : <strong>%.1f%%</strong></p>
                <p>Niveau : <strong>%s</strong></p>',
                $test->getTitre(),
                $resultat,
                $niveau
            ));
        
        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            $this->logger->error('Erreur email résultat', ['error' => $e->getMessage()]);
        }
    }

    private function updateUserProgress(TestPassage $passage): void
    {
        $test = $passage->getTest();
        $user = $passage->getUser();
        
        // ✅ PROTECTION
        if (!$test || !$user) {
            return;
        }
        
        if ($test->getType() === 'Test de niveau') {
            $langue = $test->getLangue();
            if (!$langue) {
                return;
            }
            
            $progress = $this->em->getRepository(\App\Entity\UserProgress::class)
                ->findOneBy([
                    'user' => $user,
                    'langue' => $langue
                ]);
            
            if ($progress) {
                $progress->setTestNiveauComplete(true);
                $progress->setDateDerniereActivite(new \DateTimeImmutable());
            }
        }
    }

    private function checkBadges(TestPassage $passage): void
    {
        $user = $passage->getUser();
        
        // ✅ PROTECTION
        if (!$user) {
            return;
        }
        
        $resultat = $passage->getResultat() ?? 0.0;
        
        if ($resultat >= 100) {
            $this->logger->info('Badge "Perfectionniste" débloqué !', [
                'user' => $user->getId()
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