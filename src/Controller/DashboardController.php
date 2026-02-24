<?php

namespace App\Controller;

use App\Entity\User;
use Google\Client;
use Google\Service\Sheets;
use Google\Service\Drive;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $qb = $em->getRepository(User::class)->createQueryBuilder('u');

        $search = $request->query->get('search');
        $role = $request->query->get('role');
        $status = $request->query->get('status');

        if ($search) {
            $qb->andWhere('u.nom LIKE :search OR u.email LIKE :search')
               ->setParameter('search', "%$search%");
        }

        if ($role) {
            $qb->andWhere('u.roles LIKE :role')
               ->setParameter('role', "%ROLE_" . strtoupper($role) . "%");
        }

        if ($status) {
            $qb->andWhere('u.statut = :status')
               ->setParameter('status', $status);
        }

        $users = $qb->getQuery()->getResult();

        return $this->render('dashboard/user_show.html.twig', [
            'users' => $users,
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/dashboard/delete-user/{id}', name: 'dashboard_delete_user', methods: ['POST'])]
    public function deleteUser(EntityManagerInterface $em, User $user): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        if ($currentUser->getId() === $user->getId()) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer votre propre compte.');
            return $this->redirectToRoute('dashboard');
        }

        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        return $this->redirectToRoute('dashboard');
    }

    #[Route('/dashboard/user/{id}/disable', name: 'dashboard_disable_user', methods: ['POST'])]
    public function disableUser(EntityManagerInterface $em, User $user): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $user->setStatut('disabled');
        $em->flush();

        $this->addFlash('success', 'L\'utilisateur a été désactivé avec succès.');
        return $this->redirectToRoute('dashboard');
    }

    #[Route('/dashboard/user/{id}/edit', name: 'dashboard_edit_user')]
    public function editUser(int $id, Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $currentUser = $this->getUser();

        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        if ($request->isMethod('POST')) {
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $email = $request->request->get('email');
            $role = $request->request->get('role');
            $statut = $request->request->get('statut');
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');

            if (!$nom || !$prenom || !$email || !$role) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->render('dashboard/edit_user.html.twig', ['user' => $user]);
            }

            if (preg_match('/\d/', $nom)) {
                $this->addFlash('error', 'Le nom ne doit pas contenir de chiffres.');
                return $this->render('dashboard/edit_user.html.twig', ['user' => $user]);
            }

            $existingUser = $em->getRepository(User::class)->findOneBy(['email' => $email]);
            if ($existingUser && $existingUser->getId() !== $user->getId()) {
                $this->addFlash('error', 'Cet email est déjà utilisé par un autre utilisateur.');
                return $this->render('dashboard/edit_user.html.twig', ['user' => $user]);
            }

            if ($password) {
                if (strlen($password) < 6 || $password !== $confirmPassword) {
                    $this->addFlash('error', 'Le mot de passe doit contenir au moins 6 caractères et correspondre.');
                    return $this->render('dashboard/edit_user.html.twig', ['user' => $user]);
                }

                $user->setPassword($passwordHasher->hashPassword($user, $password));
            }

            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setRoles(['ROLE_' . strtoupper($role)]);
            if ($statut) {
                $user->setStatut($statut);
            }

            $em->flush();

            $this->addFlash('success', 'Utilisateur modifié avec succès.');
            return $this->redirectToRoute('dashboard');
        }

        return $this->render('dashboard/edit_user.html.twig', ['user' => $user]);
    }

    // Optional: user profile route so template links work
    #[Route('/dashboard/user/profile', name: 'dashboard_user_profile')]
    public function userProfile(): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('dashboard/user_profile.html.twig', [
            'user' => $currentUser,
        ]);
    }


#[Route('/dashboard/export-users', name: 'dashboard_export_users')]
public function exportUsers(EntityManagerInterface $em): StreamedResponse
{
    $users = $em->getRepository(User::class)->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header row
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Nom');
    $sheet->setCellValue('C1', 'Prénom');
    $sheet->setCellValue('D1', 'Email');
    $sheet->setCellValue('E1', 'Rôle');
    $sheet->setCellValue('F1', 'Statut');

    // Style header
    $sheet->getStyle('A1:F1')->getFont()->setBold(true);

    // Data rows
    $row = 2;
    foreach ($users as $user) {
        $sheet->setCellValue('A' . $row, $user->getId());
        $sheet->setCellValue('B' . $row, $user->getNom());
        $sheet->setCellValue('C' . $row, $user->getPrenom());
        $sheet->setCellValue('D' . $row, $user->getEmail());
        $sheet->setCellValue('E' . $row, str_replace('ROLE_', '', $user->getRoles()[0]));
        $sheet->setCellValue('F' . $row, $user->getStatut());
        $row++;
    }

    // Auto size columns
    foreach (range('A', 'F') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    $writer = new Xlsx($spreadsheet);

    $response = new StreamedResponse(function () use ($writer) {
        $writer->save('php://output');
    });

    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment; filename="users.xlsx"');
    $response->headers->set('Cache-Control', 'max-age=0');

    return $response;
}
#[Route('/dashboard/users-viewer', name: 'dashboard_users_viewer')]
public function usersViewer(EntityManagerInterface $em): Response
{
    $users = $em->getRepository(User::class)->findAll();
    return $this->render('dashboard/users_viewer.html.twig', [
        'users' => $users
    ]);
}
#[Route('/dashboard/export-google-sheets', name: 'dashboard_export_google_sheets')]
public function exportGoogleSheets(EntityManagerInterface $em): Response
{
    $users = $em->getRepository(User::class)->findAll();

    // Create a brand new client — do NOT use injected Google\Client
    $client = new \Google\Client();
    $client->setAuthConfig($this->getParameter('kernel.project_dir') . '/config/google_service_account.json');
    $client->addScope(\Google\Service\Sheets::SPREADSHEETS);

    $sheetsService = new \Google\Service\Sheets($client);
    $spreadsheetId = '1Lz8LH_uVdx4RMx6v2H6QILzNg7yOSpRctvKFquvXnlc';

    $sheetsService->spreadsheets_values->clear(
        $spreadsheetId, 'A:Z', new \Google\Service\Sheets\ClearValuesRequest()
    );

    $values = [['ID', 'Nom', 'Prénom', 'Email', 'Rôle', 'Statut']];
    foreach ($users as $user) {
        $values[] = [
            $user->getId(),
            $user->getNom(),
            $user->getPrenom(),
            $user->getEmail(),
            str_replace('ROLE_', '', $user->getRoles()[0]),
            $user->getStatut(),
        ];
    }

    $body = new \Google\Service\Sheets\ValueRange(['values' => $values]);
    $sheetsService->spreadsheets_values->update(
        $spreadsheetId, 'A1', $body,
        ['valueInputOption' => 'RAW']
    );

    return $this->redirect('https://docs.google.com/spreadsheets/d/' . $spreadsheetId . '/edit');
}
}
