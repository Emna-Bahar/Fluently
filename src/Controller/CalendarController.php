<?php

namespace App\Controller;

use App\Entity\Niveau;
use App\Entity\User;
use App\Repository\SessionRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/calendar')]
class CalendarController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private SessionRepository      $sessionRepo,
        private ReservationRepository  $reservationRepo,
    ) {}

    // ✅ CORRECTION : route était '/calendar_index' → maintenant '/'
    // Résultat : /calendar au lieu de /calendar/calendar_index
    #[Route('/', name: 'calendar_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('calendar/index.html.twig');
    }

    #[Route('/events', name: 'calendar_events', methods: ['GET'])]
    public function events(): JsonResponse
    {
        $sessions = $this->sessionRepo->findAll();
        $events   = [];

        foreach ($sessions as $session) {
            if (!$session->getDateHeure()) {
                continue;
            }

            $group  = $session->getGroup();
            $niveau = $group?->getIdNiveau();
            $langue = $group?->getIDLangue();

            $placesPrises    = $this->reservationRepo->count(['session' => $session, 'statut' => 'confirmée']);
            $capacite        = (int) ($group?->getCapacite() ?? 0);
            $placesRestantes = max(0, $capacite - $placesPrises);

            $color = match($session->getStatut()) {
                'planifiée' => '#6C3CE1',
                'en cours'  => '#00C853',
                'en_cours'  => '#00C853',
                'terminée'  => '#6B6B8A',
                'annulée'   => '#FF4757',
                default     => '#9E9EBB',
            };

            $events[] = [
                'id'              => $session->getId(),
                'title'           => sprintf('%s %s', $langue?->getNom() ?? 'Session', $niveau?->getTitre() ?? ''),
                'start'           => $session->getDateHeure()->format('Y-m-d\TH:i:s'),
                'backgroundColor' => $color,
                'borderColor'     => $color,
                'extendedProps'   => [
                    'statut'          => $session->getStatut(),
                    'groupe'          => $group?->getNom() ?? '-',
                    'niveau'          => $niveau?->getTitre() ?? '-',
                    'langue'          => $langue?->getNom() ?? '-',
                    'formateur'       => $session->getUser()
                        ? $session->getUser()->getPrenom() . ' ' . $session->getUser()->getNom()
                        : '-',
                    'lienReunion'     => $session->getLienReunion(),
                    'placesRestantes' => $placesRestantes,
                    'capacite'        => $capacite,
                ],
            ];
        }

        return $this->json($events);
    }

    #[Route('/qrcode/{id}', name: 'calendar_qrcode', methods: ['GET'])]
    public function qrcode(int $id): Response
    {
        $session = $this->sessionRepo->find($id);

        if (!$session) {
            return new Response('Session introuvable', 404);
        }

        $url = $this->generateUrl(
            'app_reservation_new',
            ['session_id' => $session->getId()],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $builder = new Builder(
            writer:               new PngWriter(),
            writerOptions:        [],
            validateResult:       false,
            data:                 $url,
            encoding:             new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size:                 300,
            margin:               10,
            roundBlockSizeMode:   RoundBlockSizeMode::Margin,
        );

        $result = $builder->build();

        return new Response($result->getString(), 200, [
            'Content-Type'  => $result->getMimeType(),
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    #[Route('/recommend', name: 'calendar_recommend', methods: ['POST'])]
    public function recommend(Request $request): JsonResponse
    {
        $question = trim((string) $request->request->get('question', ''));

        if (empty($question)) {
            return $this->json(['error' => 'Posez une question (ex: je suis en niveau A2)']);
        }

        preg_match('/\b(A1|A2|B1|B2|C1|C2)\b/i', $question, $matches);
        $niveauTitre = !empty($matches[1]) ? strtoupper($matches[1]) : null;

        if (!$niveauTitre) {
            return $this->json(['error' => 'Niveau non détecté. Précisez (ex: A1, A2, B1, B2, C1, C2).']);
        }

        $niveau = $this->em->getRepository(Niveau::class)->findOneBy(['titre' => $niveauTitre]);

        if (!$niveau) {
            return $this->json(['error' => "Niveau $niveauTitre introuvable en base de données."]);
        }

        $classMetadata = $this->em->getClassMetadata(\App\Entity\Groupe::class);
        $niveauField   = null;

        foreach (['Id_niveau', 'idNiveau', 'niveau', 'niveauId', 'id_niveau'] as $candidate) {
            if ($classMetadata->hasAssociation($candidate) || $classMetadata->hasField($candidate)) {
                $niveauField = $candidate;
                break;
            }
        }

        $qb = $this->sessionRepo->createQueryBuilder('s')
            ->join('s.group', 'g')
            ->andWhere('s.statut != :annulee')
            ->setParameter('annulee', 'annulée')
            ->orderBy('s.dateHeure', 'ASC');

        if ($niveauField !== null) {
            $qb->andWhere('g.' . $niveauField . ' = :niveau')
               ->setParameter('niveau', $niveau);
        }

        $sessions        = $qb->getQuery()->getResult();
        $recommendations = [];

        foreach ($sessions as $s) {
            $confirmed = $this->reservationRepo->count(['session' => $s, 'statut' => 'confirmée']);
            $capacite  = (int) ($s->getGroup()?->getCapacite() ?? 0);
            $places    = max(0, $capacite - $confirmed);

            if ($places > 0) {
                $recommendations[] = [
                    'id'     => $s->getId(),
                    'date'   => $s->getDateHeure()?->format('d/m/Y à H:i') ?? '-',
                    'groupe' => $s->getGroup()?->getNom() ?? '-',
                    'places' => $places,
                    'niveau' => $niveauTitre,
                    'statut' => $s->getStatut(),
                ];
            }
        }

        return $this->json(['niveau' => $niveauTitre, 'recommendations' => $recommendations]);
    }

    #[Route('/debug-events', name: 'calendar_debug', methods: ['GET'])]
    public function debugEvents(): JsonResponse
    {
        $sessions = $this->sessionRepo->findAll();
        $debug = array_map(fn($s) => [
            'id'       => $s->getId(),
            'statut'   => $s->getStatut(),
            'date'     => $s->getDateHeure()?->format('Y-m-d H:i') ?? '❌ NULL',
            'groupe'   => $s->getGroup()?->getNom() ?? '❌ NULL',
            'capacite' => (int) ($s->getGroup()?->getCapacite() ?? 0),
            'niveau'   => $s->getGroup()?->getIdNiveau()?->getTitre() ?? '❌ NULL',
        ], $sessions);

        return $this->json(['total' => count($sessions), 'sessions' => $debug]);
    }

    #[Route('/sync-google/{id}', name: 'calendar_sync_google', methods: ['POST'])]
    public function syncGoogle(int $id): JsonResponse
    {
        $session = $this->sessionRepo->find($id);
        if (!$session) {
            return $this->json(['success' => false, 'message' => 'Session introuvable'], 404);
        }

        $dateHeure = $session->getDateHeure();
        if (!$dateHeure) {
            return $this->json(['success' => false, 'message' => 'Date manquante'], 400);
        }

        $start   = $dateHeure->format('Ymd\THis');
        $endDate = \DateTime::createFromInterface($dateHeure);
        $endDate->modify('+1 hour');
        $end = $endDate->format('Ymd\THis');

        $link = 'https://calendar.google.com/calendar/render?action=TEMPLATE'
            . '&text='  . urlencode($session->getGroup()?->getNom() ?? 'Session Fluently')
            . '&dates=' . $start . '/' . $end;

        return $this->json(['success' => true, 'link' => $link]);
    }
}