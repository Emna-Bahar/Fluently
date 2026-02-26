<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\PasswordResetCode;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\LoginFormAuthenticator;

class ForgotPasswordController extends AbstractController
{
    #[Route('/forgot-password', name: 'app_forgot_password')]
    public function forgotPassword(
        Request $request,
        EntityManagerInterface $em,
        MailerInterface $mailer,
        UserAuthenticatorInterface $userAuthenticator,
        LoginFormAuthenticator $authenticator
    ): Response
    {
        // STEP 1: Check if user submitted email
        if ($request->isMethod('POST') && $request->request->get('email')) {
            $email = $request->request->get('email');
            $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

            if (!$user) {
                $this->addFlash('error', 'No user found with this email.');
                return $this->redirectToRoute('app_forgot_password');
            }

            // STEP 2: Generate 6-digit reset code
            $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

            // STEP 3: Save code with expiration 10 minutes
            $reset = new PasswordResetCode();
            $reset->setUser($user);
            $reset->setCode($code);
            $reset->setExpiresAt(new \DateTime('+10 minutes'));

            $em->persist($reset);
            $em->flush();

            // STEP 4: Send email
            $emailMessage = (new Email())
                ->from('azeraissaoui123@gmail.com')
                ->to($user->getEmail())
                ->subject('Your Password Reset Code')
                ->text("Hello {$user->getNom()},\n\nYour password reset code is: {$code}\n\nIt expires in 10 minutes.");

            $mailer->send($emailMessage);

            $this->addFlash('success', 'A reset code has been sent to your email.');
            return $this->redirectToRoute('app_forgot_password_code', ['email' => $user->getEmail()]);
        }

        return $this->render('login/forgot_password.html.twig');
    }


#[Route('/forgot-password/code', name: 'app_forgot_password_code')]
public function verifyCode(
    Request $request,
    EntityManagerInterface $em,
    UserAuthenticatorInterface $userAuthenticator,
    LoginFormAuthenticator $authenticator,
    UserPasswordHasherInterface $passwordHasher
): Response
{
    $email = $request->query->get('email');
    $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

    if (!$user) {
        $this->addFlash('error', 'Invalid email.');
        return $this->redirectToRoute('app_forgot_password');
    }

    if ($request->isMethod('POST') && $request->request->get('code')) {
        $inputCode = $request->request->get('code');
        $newPassword = $request->request->get('new_password');
        $confirmPassword = $request->request->get('confirm_password');

        $resetRepo = $em->getRepository(PasswordResetCode::class);
        $reset = $resetRepo->findOneBy(['user' => $user, 'code' => $inputCode]);

        if (!$reset || $reset->getExpiresAt() < new \DateTime()) {
            $this->addFlash('error', 'Invalid or expired code.');
            return $this->redirectToRoute('app_forgot_password_code', ['email' => $email]);
        }

        if ($newPassword !== $confirmPassword) {
            $this->addFlash('error', 'Passwords do not match.');
            return $this->redirectToRoute('app_forgot_password_code', ['email' => $email]);
        }

        // Hash and save new password
        $hashed = $passwordHasher->hashPassword($user, $newPassword);
        $user->setPassword($hashed);

        // Delete reset code
        $em->remove($reset);
        $em->flush();

        $this->addFlash('success', 'Password reset successfully. Please login.');
        return $this->redirectToRoute('app_login');
    }

    return $this->render('login/forgot_password_code.html.twig', [
        'email' => $email
    ]);
}
    
}
