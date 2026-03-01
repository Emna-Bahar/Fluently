<?php

namespace App\Controller;
use App\Entity\Message;
use App\Entity\Groupe;
use App\Repository\GroupeRepository;
use App\Repository\MessageRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface; //KPG BUNDLE
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\OpenAIClient; //SERVICE OPENAI
use App\Entity\MessageLog;
use App\Repository\MessageLogRepository;
use App\Repository\LangueRepository;
use App\Repository\NiveauRepository;
use App\Repository\UserProgressRepository;


final class GroupeController extends AbstractController
{

    // ---- LibreTranslate config ----
    private const LIBRETRANSLATE_BASE = 'http://172.16.0.153:5000';

    /**
     * Map your DB language names to ISO codes returned by LibreTranslate detect.
     */
    private const LANG_NAME_TO_CODE = [
        'anglais' => 'en',
        'english' => 'en',
        'franÃ§ais' => 'fr',
        'francais' => 'fr',
        'french' => 'fr',
        'arabe' => 'ar',
        'arabic' => 'ar',
        'espagnol' => 'es',
        'spanish' => 'es',
        'allemand' => 'de',
        'german' => 'de',
        'italien' => 'it',
        'italian' => 'it',
        'portugais' => 'pt',
        'portuguese' => 'pt',
    ];

    // JUST FOR DEBUG
    #[Route('/_debug/detect', name: 'debug_detect')]
    public function detect(HttpClientInterface $client): JsonResponse
    {
        $response = $client->request('POST', self::LIBRETRANSLATE_BASE . '/detect', [
            'json' => ['q' => 'Bonjour tout le monde'],
        ]);

        return $this->json($response->toArray(false));
    }
    // DEBUG END

    #[Route('/groupes', name: 'app_groupe', methods: ['GET'])]
    public function index(GroupeRepository $groupeRepository, UserProgressRepository $progressRepo): Response
    {
        // Admins belong to the back-end only
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('dashboard');
        }

        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();

        $userGroupIds     = $user
            ? $user->getGroupes()->map(fn($g) => $g->getId())->toArray()
            : [];

        // Build list of group IDs the user has unlocked via user_progress
        $unlockedGroupIds = [];
        if ($user) {
            foreach ($groupeRepository->findAll() as $g) {
                $langueId = $g->getIDLangue()?->getId();
                $niveauId = $g->getIdNiveau()?->getId();
                if ($langueId && $progressRepo->findCompletedForGroup($user, $langueId, $niveauId)) {
                    $unlockedGroupIds[] = $g->getId();
                }
            }
        }

        return $this->render('groupe/index.html.twig', [
            'groupes'          => $groupeRepository->findAll(),
            'unlockedGroupIds' => $unlockedGroupIds,
            'userGroupIds'     => $userGroupIds,
        ]);
    }

    
    #[Route('/groupes/{id}', name: 'app_groupe_details', methods: ['GET'])]
    public function show(
        Groupe $groupe,
        MessageRepository $messageRepository,
        Request $request,
        PaginatorInterface $paginator,
        UserProgressRepository $progressRepo,
        EntityManagerInterface $em
    ): Response {
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        $currentUserId = $user?->getId();

        // Admins belong to the back-end only
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('dashboard');
        }

        // ---- Access checks ----
        if ($user) {
            // 1. Progress check: user must have completed the niveau test for this group's langue + niveau
            $groupLangue = $groupe->getIDLangue();
            $groupNiveau = $groupe->getIdNiveau();

            if ($groupLangue) {
                $progress = $progressRepo->findCompletedForGroup(
                    $user,
                    (int) $groupLangue->getId(),
                    $groupNiveau?->getId()
                );

                if (!$progress) {
                    $niveauLabel = $groupNiveau ? ' (niveau ' . $groupNiveau->getTitre() . ')' : '';
                    $this->addFlash('error',
                        "Accès refusé : vous devez compléter le test de niveau pour la langue « {$groupLangue->getNom()} »{$niveauLabel} avant de rejoindre ce groupe."
                    );
                    return $this->redirectToRoute('app_groupe');
                }
            }

            // 2. Capacity check: block non-members when group is full
            $members    = $groupe->getIdUser();
            $memberCount = $members->count();
            $isMember   = $members->exists(fn($k, $m) => $m->getId() === $currentUserId);

            if (!$isMember && $memberCount >= (int) $groupe->getCapacite()) {
                $this->addFlash('error',
                    "Ce groupe est complet ({$memberCount}/{$groupe->getCapacite()} membres). AccÃ¨s non autorisÃ©."
                );
                return $this->redirectToRoute('app_groupe');
            }
        }
        // ---- end access checks ----

        // ---- Auto-join: add user to group_user on first visit ----
        if ($user) {
            $members = $groupe->getIdUser();
            $isMember = $members->exists(fn($k, $m) => $m->getId() === $currentUserId);
            if (!$isMember) {
                $groupe->addIdUser($user);
                $em->flush();
            }
        }
        // ---- end auto-join ----

        $members     = $groupe->getIdUser();
        $memberCount = $members->count();
        $isMember    = $user ? $members->exists(fn($k, $m) => $m->getId() === $currentUserId) : false;
        $isFull      = $memberCount >= (int) $groupe->getCapacite();

        $qb = $messageRepository->findByGroupeQueryBuilder($groupe);

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('groupe/details.html.twig', [
            'groupe'        => $groupe,
            'messages'      => $pagination,
            'currentUserId' => $currentUserId,
            'memberCount'   => $memberCount,
            'isMember'      => $isMember,
            'isFull'        => $isFull,
        ]);
    }
    
    #[Route('/messages/{id}/delete', name: 'app_message_delete', methods: ['POST'])]
    public function deleteMessage(Message $message, Request $request, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('del_msg_' . $message->getId(), $request->request->getString('_token'))) {
            throw $this->createAccessDeniedException('Bad CSRF token');
        }

        /** @var \App\Entity\User|null $currentUser */
        $currentUser = $this->getUser();
        $currentUserId = $currentUser?->getId();
        $ownerId = $message->getIdUser()?->getId();

        if ($ownerId !== $currentUserId) {
            throw $this->createAccessDeniedException('Not your message');
        }

        $groupeId = $request->request->getInt('groupeId');

        // --- Log deletion ---
        $log = new MessageLog();
        $log->setAction('deleted');
        $log->setMessageId($message->getId());
        $log->setGroupe($message->getIdGroupe());
        $u = $message->getIdUser();
        $log->setUser($u);
        $log->setUserName($u ? trim($u->getNom() . ' ' . $u->getPrenom()) : 'Inconnu');
        $log->setOriginalContent($message->getContenu());
        $em->persist($log);
        // --------------------

        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('app_groupe_details', ['id' => $groupeId]);
    }


    #[Route('/messages/{id}/edit', name: 'app_message_edit', methods: ['POST'])]
    public function editMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $em,
        HttpClientInterface $client
    ): Response {
        /** @var \App\Entity\User|null $editCurrentUser */
        $editCurrentUser = $this->getUser();
        $currentUserId = $editCurrentUser?->getId();
        $ownerId = $message->getIdUser()?->getId();

        if ($ownerId !== $currentUserId) {
            throw $this->createAccessDeniedException('Not your message');
        }

        $contenu = trim((string) $request->request->get('contenu'));
        $groupeId = $request->request->getInt('groupeId');

        if ($contenu !== '') {
            $groupe = $message->getIdGroupe();
            $expected = $this->langueNomToIsoCode($groupe?->getIDLangue()?->getNom());

            if ($expected && mb_strlen($contenu) >= 10) {
                $detected = $this->detectLanguage($client, $contenu);

                if ($detected && $detected !== $expected) {
                    $this->addFlash('error', "Modification refusÃ©e: langue dÃ©tectÃ©e ($detected) â‰  langue du groupe ($expected).");
                    return $this->redirectToRoute('app_groupe_details', ['id' => $groupeId]);
                }
            }

            // --- Log edit ---
            $log = new MessageLog();
            $log->setAction('edited');
            $log->setMessageId($message->getId());
            $log->setGroupe($groupe);
            $editUser = $message->getIdUser();
            $log->setUser($editUser);
            $log->setUserName($editUser ? trim($editUser->getNom() . ' ' . $editUser->getPrenom()) : 'Inconnu');
            $log->setOriginalContent($message->getContenu());
            $log->setNewContent($contenu);
            $em->persist($log);
            // ----------------

            $message->setContenu($contenu);
            $message->setDateModif(new \DateTime());
            $em->flush();
        }

        return $this->redirectToRoute('app_groupe_details', ['id' => $groupeId]);
    }


    #[Route('/groupes/{id}/message', name: 'app_groupe_message', methods: ['POST'])]
    public function sendMessage(
        Request $request,
        Groupe $groupe,
        EntityManagerInterface $em,
        HttpClientInterface $http
    ): Response {
        $contenu = trim((string) $request->request->get('contenu'));

        if ($contenu === '') {
            return $this->redirectToRoute('app_groupe_details', ['id' => $groupe->getId()]);
        }

        // ---- LibreTranslate enforcement ----
        $expected = $this->getGroupLanguageCode($groupe);
        if ($expected !== null) {
            $detected = $this->detectLanguage($http, $contenu);

            if ($detected === null) {
                $this->addFlash('error', "Language check unavailable. Try again.");
                return $this->redirectToRoute('app_groupe_details', ['id' => $groupe->getId()]);
            }

            if ($detected !== $expected) {
                $this->addFlash('error', "Message blocked: group language is {$expected}, detected {$detected}.");
                return $this->redirectToRoute('app_groupe_details', ['id' => $groupe->getId()]);
            }
        }
        // ---- end enforcement ----

        $now = new \DateTime();

        $message = new Message();
        $message->setContenu($contenu);
        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        $message->setIdUser($user);
        $message->setIdGroupe($groupe);

        $message->setTypeMessage('text');
        $message->setIsEpingle(false);
        $message->setStatutMessage('sent');
        $message->setDateCreation($now);
        $message->setDateModif($now);
        $message->setEmojiReact(null);

        $em->persist($message);
        $em->flush();

        return $this->redirectToRoute('app_groupe_details', ['id' => $groupe->getId()]);
    }

    // ----------------- helpers -----------------

    private function getGroupLanguageCode(Groupe $groupe): ?string
    {
        $langEntity = $groupe->getIDLangue();

        if (!$langEntity) {
            return null;
        }

        $name = mb_strtolower(trim((string) $langEntity->getNom()));
        return self::LANG_NAME_TO_CODE[$name] ?? null;
    }

    private function detectLanguage(HttpClientInterface $http, string $text): ?string
    {
        try {
            $resp = $http->request('POST', self::LIBRETRANSLATE_BASE . '/detect', [
                'json' => ['q' => $text],
                'timeout' => 10,
            ]);

            $data = $resp->toArray(false);

            if (isset($data[0]['language']) && is_string($data[0]['language'])) {
                return $data[0]['language'];
            }

            return null;
        } catch (\Throwable) {
            return null;
        }
    }

    private function langueNomToIsoCode(?string $nom): ?string
    {
        if (!$nom) return null;

        $n = mb_strtolower(trim($nom));

        return match ($n) {
            'franÃ§ais', 'francais' => 'fr',
            'anglais' => 'en',
            'arabe' => 'ar',
            'espagnol' => 'es',
            'allemand' => 'de',
            'italien' => 'it',
            default => null,
        };
    }


    #[Route('/groupes/{id}/ai/suggest', name: 'app_groupe_ai_suggest', methods: ['POST'])]
    public function aiSuggest(int $id, Request $request, OpenAIClient $ai): JsonResponse
    {
        $text = trim((string) $request->request->get('text', ''));

        if ($text === '') {
            return $this->json(['ok' => false, 'error' => 'Empty text'], 400);
        }

        $lang = 'English';

        try {
            $suggestion = $ai->rewrite($text, $lang);

            if ($suggestion === '') {
                return $this->json(['ok' => false, 'error' => 'AI returned empty output'], 502);
            }

            return $this->json(['ok' => true, 'suggestion' => $suggestion]);
        } catch (\Throwable $e) {
            return $this->json(['ok' => false, 'error' => 'AI exception'], 500);
        }
    }

    #[Route('/adminGroup', name: 'admin_group_index', methods: ['GET'])]
    public function adminGroupIndex(GroupeRepository $groupeRepo, LangueRepository $langueRepo, NiveauRepository $niveauRepo): Response
    {
        return $this->render('groupe/admin_groups.html.twig', [
            'groupes' => $groupeRepo->findAllWithDetails(),
            'langues' => $langueRepo->findAll(),
            'niveaux' => $niveauRepo->findAll(),
        ]);
    }

    #[Route('/adminGroup/create', name: 'admin_group_create', methods: ['POST'])]
    public function adminGroupCreate(
        Request $request,
        EntityManagerInterface $em,
        LangueRepository $langueRepo,
        NiveauRepository $niveauRepo
    ): Response {
        $errors = [];

        $nom         = trim((string) $request->request->get('nom', ''));
        $description = trim((string) $request->request->get('description', ''));
        $capacite    = (int) $request->request->get('capacite', 0);
        $statut      = trim((string) $request->request->get('statut', ''));
        $langueId    = (int) $request->request->get('langue', 0);
        $niveauId    = (int) $request->request->get('niveau', 0);

        if ($nom === '') {
            $errors[] = 'Le nom est obligatoire.';
        } elseif (!preg_match('/^[\p{L}0-9 \'\-]{2,50}$/u', $nom)) {
            $errors[] = 'Le nom doit contenir 2â€“50 caractÃ¨res (lettres, chiffres, espaces, tirets).';
        }

        if ($description === '') {
            $errors[] = 'La description est obligatoire.';
        } elseif (mb_strlen($description) > 255) {
            $errors[] = 'La description ne peut pas dÃ©passer 255 caractÃ¨res.';
        }

        if ($capacite < 2 || $capacite > 200) {
            $errors[] = 'La capacitÃ© doit Ãªtre entre 2 et 200.';
        }

        $allowedStatuts = ['actif', 'inactif', 'archivÃ©'];
        if (!in_array($statut, $allowedStatuts, true)) {
            $errors[] = 'Statut invalide.';
        }

        $langue = $langueRepo->find($langueId);
        if (!$langue) {
            $errors[] = 'Langue invalide.';
        }

        $niveau = $niveauRepo->find($niveauId);
        if (!$niveau) {
            $errors[] = 'Niveau invalide.';
        }

        if ($errors) {
            foreach ($errors as $e) {
                $this->addFlash('error', $e);
            }
            return $this->redirectToRoute('admin_group_index');
        }

        $groupe = new Groupe();
        $groupe->setNom($nom);
        $groupe->setDescription($description);
        $groupe->setCapacite($capacite);
        $groupe->setStatut($statut);
        $groupe->setDateCreation(new \DateTime());
        $groupe->setIDLangue($langue);
        $groupe->setIdNiveau($niveau);

        $em->persist($groupe);
        $em->flush();

        $this->addFlash('success', "Groupe Â« {$nom} Â» crÃ©Ã© avec succÃ¨s.");
        return $this->redirectToRoute('admin_group_index');
    }

    #[Route('/adminGroup/{id}', name: 'admin_group_manage', methods: ['GET'])]
    public function adminGroupManage(
        Groupe $groupe,
        MessageRepository $messageRepo,
        MessageLogRepository $logRepo,
        Request $request
    ): Response {
        $q = trim((string) $request->query->get('q', ''));

        if ($q !== '') {
            $messages = $messageRepo->searchByGroupe($groupe, $q);
        } else {
            $messages = $messageRepo->findByGroupe($groupe);
        }

        $logs = $logRepo->findByGroupe((int) $groupe->getId(), 60);

        return $this->render('groupe/admin_group_chat.html.twig', [
            'groupe'   => $groupe,
            'messages' => $messages,
            'q'        => $q,
            'logs'     => $logs,
        ]);
    }

    #[Route('/adminGroup/message/{id}/delete', name: 'admin_message_delete', methods: ['POST'])]
    public function adminDeleteMessage(
        Message $message,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        if (!$this->isCsrfTokenValid('admin_del_msg_' . $message->getId(), $request->request->getString('_token'))) {
            throw $this->createAccessDeniedException('Bad CSRF token');
        }

        $idGroupe = $message->getIdGroupe();
        if ($idGroupe === null) {
            throw $this->createNotFoundException('Message has no groupe.');
        }
        $groupId = (int) $idGroupe->getId();

        // --- Log admin deletion ---
        $log = new MessageLog();
        $log->setAction('deleted');
        $log->setMessageId($message->getId());
        $log->setGroupe($idGroupe);
        $adminDelUser = $message->getIdUser();
        $log->setUser($adminDelUser);
        $log->setUserName($adminDelUser ? trim($adminDelUser->getNom() . ' ' . $adminDelUser->getPrenom()) : 'Inconnu');
        $log->setOriginalContent($message->getContenu());
        $em->persist($log);
        // -------------------------

        $em->remove($message);
        $em->flush();

        return $this->redirectToRoute('admin_group_manage', ['id' => $groupId]);
    }
}
