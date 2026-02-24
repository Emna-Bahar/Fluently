<?php
// src/Controller/CalendarController.php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use App\Repository\ReservationRepository;
use App\Repository\SessionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/calendar')]
class CalendarController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private SessionRepository $sessionRepo,
        private ReservationRepository $reservationRepo,
        private HttpClientInterface $httpClient,
    ) {}

    // ─── HELPER : récupère le user courant (avec fallback dev) ───
    private function getCurrentUser(): ?User
    {
        $user = $this->getUser();
        if ($user instanceof User) {
            return $user;
        }
        return $this->em->getRepository(User::class)->find(1);
    }

    // ─── HELPER : capacité ───────────────────────────────────────
    private function getCapaciteInt($groupe): int
    {
        if ($groupe === null) return 0;
        $raw = $groupe->getCapacite();
        if ($raw === null) return 0;
        return (int)(string) $raw;
    }

    // ─── HELPER : normalise UTF-8 → ASCII ───────────────────────
    private function normalizeStr(string $str): string
    {
        $from = ['é','è','ê','ë','à','â','ù','û','î','ï','ô','ö','ç','ñ','É','È','Ê','À','Ç'];
        $to   = ['e','e','e','e','a','a','u','u','i','i','o','o','c','n','e','e','e','a','c'];
        return str_replace($from, $to, mb_strtolower(trim($str), 'UTF-8'));
    }

    // ─── HELPER : normalise statut UTF-8 → ASCII ────────────────
    private function normalizeStatut(string $statut): string
    {
        return str_replace(' ', '_', $this->normalizeStr($statut));
    }

    // ─── HELPER : niveau ─────────────────────────────────────────
    private function safeGetNiveau($groupe): ?object
    {
        if ($groupe === null) return null;
        try {
            $niveau = $groupe->getIdNiveau();
            if ($niveau !== null) {
                $niveau->getTitre();
            }
            return $niveau;
        } catch (\Throwable $e) {
            return null;
        }
    }

    // ─── HELPER : langue ─────────────────────────────────────────
    private function safeGetLangue($groupe): ?object
    {
        if ($groupe === null) return null;
        try {
            $langue = $groupe->getIdLangue();
            if ($langue !== null) {
                $langue->getNom();
            }
            return $langue;
        } catch (\Throwable $e) {
            return null;
        }
    }

    // ─── HELPER : contenu QR ─────────────────────────────────────
    private function buildQrContent(
        Reservation $reservation,
        Session $session,
        $groupe,
        $langue,
        $niveau,
        User $user
    ): string {
        $dateHeure     = $session->getDateHeure();
        $dateFormatted = $dateHeure ? $dateHeure->format('d/m/Y à H:i') : 'Date non définie';

        return sprintf(
            "FLUENTLY RESERVATION CONFIRMÉE\n\n" .
            "ID réservation : #%d\n" .
            "Session : %s — %s\n" .
            "Date : %s\n" .
            "Groupe : %s\n" .
            "Niveau : %s\n" .
            "Formateur : %s\n" .
            "Participant : %s %s\n" .
            "Statut : CONFIRMÉ\n\n" .
            "Fluently Live - Améliorez votre niveau rapidement !",
            $reservation->getId(),
            $langue?->getNom() ?? 'Langue',
            $niveau?->getTitre() ?? 'Niveau',
            $dateFormatted,
            $groupe?->getNom() ?? '?',
            $niveau?->getTitre() ?? '?',
            $session->getUser() ? $session->getUser()->getPrenom() . ' ' . $session->getUser()->getNom() : '?',
            $user->getPrenom(),
            $user->getNom()
        );
    }

    // ─── HELPER : génère QR base64 ───────────────────────────────
    private function generateQrBase64(string $content): array
    {
        if (!extension_loaded('gd')) {
            return ['data' => null, 'error' => 'Extension PHP GD non chargée. Activez extension=gd dans php.ini et redémarrez Apache.'];
        }

        try {
            $qrCode = new QrCode(
                data: $content,
                encoding: new Encoding('UTF-8'),
                errorCorrectionLevel: ErrorCorrectionLevel::High,
                size: 300,
                margin: 10,
                foregroundColor: new Color(0, 0, 0),
                backgroundColor: new Color(255, 255, 255)
            );

            $writer = new PngWriter();
            $result = $writer->write($qrCode);

            return ['data' => 'data:image/png;base64,' . base64_encode($result->getString()), 'error' => null];
        } catch (\Throwable $e) {
            return ['data' => null, 'error' => $e->getMessage()];
        }
    }

    // ─── PAGE PRINCIPALE ─────────────────────────────────────────
    #[Route('', name: 'app_calendar_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('calendar/index.html.twig');
    }

    // ─── EVENTS JSON ─────────────────────────────────────────────
    #[Route('/events', name: 'app_calendar_events', methods: ['GET'])]
    public function events(): JsonResponse
    {
        $sessions = $this->sessionRepo->findAll();
        $events   = [];

        $colorMap = [
            'planifiee' => '#6C3CE1',
            'en_cours'  => '#00E676',
            'terminee'  => '#6B6B8A',
            'annulee'   => '#FF4757',
        ];

        $currentUser    = $this->getCurrentUser();
        $dejaReserveIds = [];
        if ($currentUser) {
            foreach ($this->reservationRepo->findBy(['user' => $currentUser]) as $resa) {
                if ($resa->getSession()) {
                    $dejaReserveIds[] = $resa->getSession()->getId();
                }
            }
        }

        foreach ($sessions as $session) {
            try {
                $groupe    = $session->getGroup();
                $langue    = $this->safeGetLangue($groupe);
                $niveau    = $this->safeGetNiveau($groupe);
                $formateur = $session->getUser();

                $statut    = $session->getStatut() ?? 'planifiée';
                $statutKey = $this->normalizeStatut($statut);
                $color     = $colorMap[$statutKey] ?? '#6C3CE1';

                $capacite        = $this->getCapaciteInt($groupe);
                $nbResa          = count($session->getReservations());
                $placesRestantes = max(0, $capacite - $nbResa);

                $events[] = [
                    'id'    => $session->getId(),
                    'title' => sprintf('%s — %s', $langue?->getNom() ?? 'Session', $niveau?->getTitre() ?? ''),
                    'start' => $session->getDateHeure()?->format('Y-m-d\TH:i:s'),
                    'color' => $color,
                    'extendedProps' => [
                        'session_id'       => $session->getId(),
                        'statut'           => $statutKey,
                        'statut_label'     => $statut,
                        'groupe'           => $groupe?->getNom() ?? '–',
                        'langue'           => $langue?->getNom() ?? '–',
                        'niveau'           => $niveau?->getTitre() ?? '–',
                        'formateur'        => $formateur ? ($formateur->getPrenom() . ' ' . $formateur->getNom()) : '–',
                        'lien_reunion'     => $session->getLienReunion(),
                        'capacite'         => $capacite,
                        'places_restantes' => $placesRestantes,
                        'deja_reserve'     => in_array($session->getId(), $dejaReserveIds),
                        'rating'           => $session->getRating() ?? 0,
                    ],
                ];
            } catch (\Throwable $e) {
                continue;
            }
        }

        return $this->json($events);
    }

    // ─── STATS JSON ──────────────────────────────────────────────
    #[Route('/stats', name: 'app_calendar_stats', methods: ['GET'])]
    public function stats(): JsonResponse
    {
        $all     = $this->sessionRepo->findAll();
        $enCours = $planifie = 0;

        foreach ($all as $s) {
            $norm = $this->normalizeStatut($s->getStatut() ?? '');
            if ($norm === 'en_cours')  $enCours++;
            if ($norm === 'planifiee') $planifie++;
        }

        return $this->json([
            'total'        => count($all),
            'en_cours'     => $enCours,
            'planifie'     => $planifie,
            'reservations' => count($this->reservationRepo->findAll()),
        ]);
    }

    // ─── MES RÉSERVATIONS EN JSON ────────────────────────────────
    #[Route('/my-reservations', name: 'app_calendar_my_reservations', methods: ['GET'])]
    public function myReservations(): JsonResponse
    {
        try {
            $user = $this->getCurrentUser();
            if (!$user) {
                return $this->json(['success' => false, 'events' => []], 401);
            }

            $reservations = $this->reservationRepo->findBy(['user' => $user]);
            $events = [];

            foreach ($reservations as $resa) {
                try {
                    $session = $resa->getSession();
                    if (!$session) continue;

                    $groupe = $session->getGroup();
                    $langue = $this->safeGetLangue($groupe)?->getNom() ?? 'Session';
                    $niveau = $this->safeGetNiveau($groupe)?->getTitre() ?? '';
                    $dateH  = $session->getDateHeure();

                    if (!$dateH) continue;

                    $statutKey = $this->normalizeStatut($resa->getStatut() ?? '');
                    $colorMap  = [
                        'en_attente' => '#FFD600',
                        'confirmee'  => '#00E676',
                        'annulee'    => '#FF4757',
                        'refusee'    => '#FF4757',
                    ];
                    $color = $colorMap[$statutKey] ?? '#6C3CE1';

                    $events[] = [
                        'id'    => 'resa_' . $resa->getId(),
                        'title' => '🎟️ ' . $langue . ' • ' . $niveau,
                        'start' => $dateH->format('Y-m-d\TH:i:s'),
                        'color' => $color,
                        'extendedProps' => [
                            'reservation_id'   => $resa->getId(),
                            'session_id'       => $session->getId(),
                            'groupe'           => $groupe?->getNom() ?? '–',
                            'formateur'        => $session->getUser() ? ($session->getUser()->getPrenom() . ' ' . $session->getUser()->getNom()) : '–',
                            'lien_reunion'     => $session->getLienReunion(),
                            'statut'           => $resa->getStatut(),
                            'date_reservation' => $resa->getDateReservation()?->format('d/m/Y'),
                        ],
                    ];
                } catch (\Throwable $e) {
                    continue;
                }
            }

            return $this->json(['success' => true, 'events' => $events]);
        } catch (\Throwable $e) {
            return $this->json(['success' => false, 'message' => $e->getMessage(), 'events' => []], 500);
        }
    }

    // ─── RÉSERVATION + QR CODE ───────────────────────────────────
    #[Route('/reserver/{id}', name: 'app_calendar_reserver', methods: ['POST'])]
    public function reserver(Session $session): JsonResponse
    {
        try {
            $user = $this->getCurrentUser();
            if (!$user) {
                return $this->json(['success' => false, 'message' => 'Vous devez être connecté pour réserver.'], 401);
            }

            $statutKey = $this->normalizeStatut($session->getStatut() ?? '');
            if ($statutKey !== 'planifiee') {
                return $this->json([
                    'success' => false,
                    'message' => 'Cette session n\'est pas disponible. Statut : ' . $session->getStatut(),
                ], 400);
            }

            $groupe = $session->getGroup();
            $langue = $this->safeGetLangue($groupe);
            $niveau = $this->safeGetNiveau($groupe);

            $reservationExistante = $this->reservationRepo->findOneBy([
                'session' => $session,
                'user'    => $user,
            ]);

            if ($reservationExistante) {
                $qrContent = $this->buildQrContent($reservationExistante, $session, $groupe, $langue, $niveau, $user);
                $qr        = $this->generateQrBase64($qrContent);

                if (!$qr['data']) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Erreur génération QR : ' . ($qr['error'] ?? 'Erreur inconnue'),
                    ], 500);
                }

                return $this->json([
                    'success'          => true,
                    'already_reserved' => true,
                    'message'          => 'Vous avez déjà réservé cette session. Voici votre QR code.',
                    'reservation_id'   => $reservationExistante->getId(),
                    'qr_code'          => $qr['data'],
                    'qr_content'       => $qrContent,
                ]);
            }

            $capacite = $this->getCapaciteInt($groupe);
            $nbExist  = count($session->getReservations());
            if ($capacite > 0 && $nbExist >= $capacite) {
                return $this->json([
                    'success' => false,
                    'message' => 'Session complète (' . $nbExist . '/' . $capacite . ' places prises).',
                ], 400);
            }

            $reservation = new Reservation();
            $reservation->setDateReservation(new \DateTime());
            $reservation->setStatut('confirmee');
            $reservation->setSession($session);
            $reservation->setUser($user);

            $this->em->persist($reservation);
            $this->em->flush();

            $qrContent = $this->buildQrContent($reservation, $session, $groupe, $langue, $niveau, $user);
            $qr        = $this->generateQrBase64($qrContent);

            if (!$qr['data']) {
                return $this->json([
                    'success'        => true,
                    'message'        => 'Réservation confirmée ! Mais QR indisponible : ' . ($qr['error'] ?? ''),
                    'reservation_id' => $reservation->getId(),
                    'qr_code'        => null,
                    'qr_content'     => $qrContent,
                ]);
            }

            return $this->json([
                'success'          => true,
                'already_reserved' => false,
                'message'          => 'Réservation confirmée !',
                'reservation_id'   => $reservation->getId(),
                'qr_code'          => $qr['data'],
                'qr_content'       => $qrContent,
            ]);

        } catch (\Throwable $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur serveur : ' . $e->getMessage(),
            ], 500);
        }
    }

    // ─── QR CODE direct ──────────────────────────────────────────
    #[Route('/qrcode/{id}', name: 'app_calendar_qrcode', methods: ['GET'])]
    public function qrcode(Reservation $reservation): Response
    {
        try {
            $session = $reservation->getSession();
            if (!$session) throw new \Exception('Session non trouvée');

            $groupe = $session->getGroup();
            $langue = $this->safeGetLangue($groupe);
            $niveau = $this->safeGetNiveau($groupe);
            $user   = $reservation->getUser();

            $dateFormatted = $session->getDateHeure()?->format('d/m/Y H:i') ?? 'Date non définie';

            $qrContent = sprintf(
                "FLUENTLY RESERVATION\nID: #%d\nSession: %s\nDate: %s\nGroupe: %s\nNiveau: %s\nLien: %s\nUtilisateur: %s",
                $reservation->getId(),
                ($langue?->getNom() ?? 'Session') . ' — ' . ($niveau?->getTitre() ?? ''),
                $dateFormatted,
                $groupe?->getNom() ?? '?',
                $niveau?->getTitre() ?? '?',
                $session->getLienReunion() ?? 'À confirmer',
                $user ? ($user->getPrenom() . ' ' . $user->getNom()) : '?'
            );

            if (!extension_loaded('gd')) {
                return new Response('Extension GD non disponible.', 500);
            }

            $qrCode = new QrCode(
                data: $qrContent,
                encoding: new Encoding('UTF-8'),
                errorCorrectionLevel: ErrorCorrectionLevel::High,
                size: 300,
                margin: 10,
                foregroundColor: new Color(0, 0, 0),
                backgroundColor: new Color(255, 255, 255)
            );

            $writer   = new PngWriter();
            $result   = $writer->write($qrCode);
            $filename = 'qr-code-' . $reservation->getId() . '.png';

            return new Response($result->getString(), 200, [
                'Content-Type'        => 'image/png',
                'Content-Disposition' => 'inline; filename="' . $filename . '"',
            ]);

        } catch (\Throwable $e) {
            return new Response('Erreur QR code: ' . $e->getMessage(), 500);
        }
    }

    // ─── DÉTAILS RÉSERVATION ─────────────────────────────────────
    #[Route('/reservation/{id}', name: 'app_calendar_reservation_details', methods: ['GET'])]
    public function reservationDetails(Reservation $reservation): Response
    {
        $session = $reservation->getSession();

        return $this->render('calendar/reservation_details.html.twig', [
            'reservation' => $reservation,
            'session'     => $session,
        ]);
    }

    // ─── GOOGLE CALENDAR ─────────────────────────────────────────
    #[Route('/sync-google/{reservationId}', name: 'app_calendar_google_sync', methods: ['POST'])]
    public function syncGoogleCalendar(int $reservationId, Request $request): JsonResponse
    {
        try {
            $reservation = $this->reservationRepo->find($reservationId);
            if (!$reservation) {
                return $this->json(['success' => false, 'message' => 'Réservation introuvable.'], 404);
            }

            $data        = json_decode($request->getContent(), true);
            $accessToken = $data['access_token'] ?? null;

            if (!$accessToken) {
                return $this->json(['success' => false, 'message' => 'Token Google manquant.'], 400);
            }

            $session = $reservation->getSession();
            if (!$session) {
                return $this->json(['success' => false, 'message' => 'Session non trouvée.'], 404);
            }

            $groupe = $session->getGroup();
            $langue = $this->safeGetLangue($groupe)?->getNom() ?? 'Session';
            $niveau = $this->safeGetNiveau($groupe)?->getTitre() ?? '';
            $dateH  = $session->getDateHeure();

            if (!$dateH) {
                return $this->json(['success' => false, 'message' => 'Date de session manquante.'], 400);
            }

            $dateEnd = (clone $dateH)->modify('+1 hour');

            $eventPayload = [
                'summary'     => "🎓 Fluently Live — {$langue} {$niveau}",
                'description' => sprintf(
                    "Session Fluently Live\nGroupe : %s\nFormateur : %s\nLien : %s\nRéservation #%d",
                    $groupe?->getNom() ?? '–',
                    $session->getUser() ? ($session->getUser()->getPrenom() . ' ' . $session->getUser()->getNom()) : '–',
                    $session->getLienReunion() ?? 'À confirmer',
                    $reservation->getId()
                ),
                'start'     => ['dateTime' => $dateH->format(\DateTime::RFC3339),   'timeZone' => 'Africa/Tunis'],
                'end'       => ['dateTime' => $dateEnd->format(\DateTime::RFC3339), 'timeZone' => 'Africa/Tunis'],
                'reminders' => [
                    'useDefault' => false,
                    'overrides'  => [
                        ['method' => 'popup', 'minutes' => 30],
                        ['method' => 'email', 'minutes' => 60],
                    ],
                ],
                'colorId' => '9',
            ];

            if ($session->getLienReunion()) {
                $eventPayload['location'] = $session->getLienReunion();
            }

            $response = $this->httpClient->request('POST',
                'https://www.googleapis.com/calendar/v3/calendars/primary/events',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                        'Content-Type'  => 'application/json',
                    ],
                    'json'    => $eventPayload,
                    'timeout' => 10,
                ]
            );

            $result = $response->toArray();

            return $this->json([
                'success'      => true,
                'message'      => 'Ajouté à Google Calendar !',
                'google_event' => $result['htmlLink'] ?? null,
            ]);

        } catch (\Throwable $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur Google Calendar : ' . $e->getMessage(),
            ], 500);
        }
    }

    // ─── IA SUGGEST (LUNA) ───────────────────────────────────────
    #[Route('/ai-suggest', name: 'app_calendar_ai_suggest', methods: ['POST'])]
    public function aiSuggest(Request $request): JsonResponse
    {
        $data     = json_decode($request->getContent(), true);
        $question = trim($data['question'] ?? '');

        if (!$question) {
            return $this->json(['response' => 'Veuillez poser une question.'], 400);
        }

        $sessions   = $this->sessionRepo->findAll();
        $planifiees = array_filter($sessions, fn($s) => $this->normalizeStatut($s->getStatut() ?? '') === 'planifiee');
        $ctx        = [];

        foreach (array_slice(array_values($planifiees), 0, 10) as $s) {
            try {
                $g      = $s->getGroup();
                $langue = $this->safeGetLangue($g);
                $niveau = $this->safeGetNiveau($g);
                $nbResa = count($s->getReservations());
                $cap    = $this->getCapaciteInt($g);
                $ctx[]  = sprintf(
                    '- Session #%d : %s • %s | Date: %s | Places: %d/%d (%d%% complet) | Formateur: %s',
                    $s->getId(),
                    $langue?->getNom() ?? '?',
                    $niveau?->getTitre() ?? '?',
                    $s->getDateHeure()?->format('d/m/Y H:i') ?? '?',
                    max(0, $cap - $nbResa),
                    $cap,
                    $cap > 0 ? round(($nbResa / $cap) * 100) : 0,
                    $s->getUser() ? ($s->getUser()->getPrenom() . ' ' . $s->getUser()->getNom()) : '?'
                );
            } catch (\Throwable $e) {
                continue;
            }
        }

        $systemPrompt = sprintf(
            "Tu es LUNA, l'assistante IA pédagogique de Fluently.\n" .
            "Sessions disponibles :\n%s\n\n" .
            "Réponds en français, max 4 phrases, personnalisé. Signe 'LUNA 🌙'.",
            implode("\n", $ctx) ?: 'Aucune session disponible.'
        );

        $apiKey = $_ENV['OPENAI_API_KEY'] ?? '';

        if (!$apiKey || str_starts_with($apiKey, 'sk-xxx')) {
            return $this->json(['response' => $this->fallbackAiResponse($question, array_values($planifiees))]);
        }

        try {
            $response = $this->httpClient->request('POST',
                'https://api.openai.com/v1/chat/completions',
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $apiKey,
                        'Content-Type'  => 'application/json',
                    ],
                    'json' => [
                        'model'       => 'gpt-4o-mini',
                        'max_tokens'  => 350,
                        'temperature' => 0.75,
                        'messages'    => [
                            ['role' => 'system', 'content' => $systemPrompt],
                            ['role' => 'user',   'content' => $question],
                        ],
                    ],
                    'timeout' => 15,
                ]
            );

            $result = $response->toArray();

            return $this->json([
                'response' => $result['choices'][0]['message']['content'] ?? 'Pas de réponse.',
            ]);

        } catch (\Throwable $e) {
            return $this->json([
                'response' => $this->fallbackAiResponse($question, array_values($planifiees)),
            ]);
        }
    }

    // ─── IA PROGRESSION ──────────────────────────────────────────
    #[Route('/ai-progression', name: 'app_calendar_ai_progression', methods: ['GET'])]
    public function aiProgression(): JsonResponse
    {
        $reservations = $this->reservationRepo->findAll();
        $statsByLevel = [];

        foreach ($reservations as $resa) {
            try {
                $session = $resa->getSession();
                if (!$session) continue;

                $groupe = $session->getGroup();
                $niveau = $this->safeGetNiveau($groupe)?->getTitre() ?? 'Inconnu';
                $langue = $this->safeGetLangue($groupe)?->getNom() ?? 'Inconnu';
                $key    = $langue . '|' . $niveau;

                if (!isset($statsByLevel[$key])) {
                    $statsByLevel[$key] = [
                        'langue' => $langue,
                        'niveau' => $niveau,
                        'count'  => 0,
                        'score'  => $this->niveauToScore($niveau),
                    ];
                }
                $statsByLevel[$key]['count']++;
            } catch (\Throwable $e) {
                continue;
            }
        }

        usort($statsByLevel, fn($a, $b) => $b['count'] <=> $a['count']);

        if (!empty($statsByLevel)) {
            $top       = $statsByLevel[0];
            $avgScore  = array_sum(array_column($statsByLevel, 'score')) / count($statsByLevel);
            $nextLevel = $this->scoreToNiveau((int) ceil($avgScore + 0.5));
            $rec       = sprintf(
                "Vous êtes très actif en %s niveau %s ! Votre prochaine étape : niveau %s. Continuez ! 🚀",
                $top['langue'], $top['niveau'], $nextLevel
            );
        } else {
            $rec = "Aucune réservation encore. Commencez par une session A1 ou A2 ! 🌟";
        }

        return $this->json([
            'stats'          => array_values($statsByLevel),
            'recommendation' => $rec,
        ]);
    }

    // ─── FALLBACK IA — LUNA avec normalisation ────────────────────
    private function fallbackAiResponse(string $question, array $sessions): string
    {
        // Normaliser la question (enlever accents, mettre en minuscules)
        $qNorm = $this->normalizeStr($question);

        $niveauDetecte  = null;
        $langueDetectee = null;

        // Détection du niveau
        foreach (['a1', 'a2', 'b1', 'b2', 'c1', 'c2'] as $n) {
            if (str_contains($qNorm, $n)) {
                $niveauDetecte = strtoupper($n);
                break;
            }
        }

        // Détection de la langue — mots-clés normalisés (sans accents)
        $langueMap = [
            'francais'  => 'Français',
            'anglais'   => 'Anglais',
            'espagnol'  => 'Espagnol',
            'arabe'     => 'Arabe',
            'allemand'  => 'Allemand',
            'italien'   => 'Italien',
            'portugais' => 'Portugais',
            'chinois'   => 'Chinois',
            'japonais'  => 'Japonais',
            'russe'     => 'Russe',
        ];

        foreach ($langueMap as $motCle => $nomLangue) {
            if (str_contains($qNorm, $motCle)) {
                $langueDetectee = $nomLangue;
                break;
            }
        }

        if (empty($sessions)) {
            return 'Aucune session planifiée pour le moment. Revenez bientôt ! 🌟 — LUNA 🌙';
        }

        $found = [];
        foreach ($sessions as $s) {
            try {
                $g      = $s->getGroup();
                $langue = $this->safeGetLangue($g);
                $niveau = $this->safeGetNiveau($g);
                $match  = true;

                if ($langueDetectee) {
                    // Normaliser le nom de la langue en BDD pour comparaison
                    $nomBD   = $this->normalizeStr($langue?->getNom() ?? '');
                    $nomCher = $this->normalizeStr($langueDetectee);
                    if (!str_contains($nomBD, $nomCher)) {
                        $match = false;
                    }
                }

                if ($niveauDetecte && strtoupper($niveau?->getTitre() ?? '') !== $niveauDetecte) {
                    $match = false;
                }

                if ($match) $found[] = $s;
            } catch (\Throwable $e) {
                continue;
            }
        }

        if (empty($found)) {
            $msg = 'Je n\'ai pas trouvé de session';
            if ($langueDetectee) $msg .= " en $langueDetectee";
            if ($niveauDetecte)  $msg .= " niveau $niveauDetecte";
            return $msg . '. Consultez le calendrier pour voir toutes les sessions disponibles ! — LUNA 🌙';
        }

        $s       = $found[0];
        $g       = $s->getGroup();
        $cap     = $this->getCapaciteInt($g);
        $nbResa  = count($s->getReservations());
        $places  = max(0, $cap - $nbResa);
        $urgence = ($cap > 0 && $nbResa > 0 && ($nbResa / $cap) > 0.8)
            ? ' ⚠️ Presque complète, réservez vite !'
            : '';

        return sprintf(
            'Je recommande "%s" (%s • %s) le %s. Il reste %d place(s).%s Chaque session vous rapproche de la maîtrise ! — LUNA 🌙',
            $g?->getNom() ?? 'Session',
            $this->safeGetLangue($g)?->getNom() ?? '',
            $this->safeGetNiveau($g)?->getTitre() ?? '',
            $s->getDateHeure()?->format('d/m/Y à H:i') ?? '?',
            $places,
            $urgence
        );
    }

    private function niveauToScore(string $niveau): int
    {
        return match (strtoupper(trim($niveau))) {
            'A1' => 1, 'A2' => 2, 'B1' => 3,
            'B2' => 4, 'C1' => 5, 'C2' => 6,
            default => 1,
        };
    }

    private function scoreToNiveau(int $score): string
    {
        return match (true) {
            $score <= 1  => 'A1',
            $score === 2 => 'A2',
            $score === 3 => 'B1',
            $score === 4 => 'B2',
            $score === 5 => 'C1',
            default      => 'C2',
        };
    }
}