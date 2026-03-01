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
        if ($request->isMethod('POST') && $request->request->get('email')) {
            // Fix line 40: cast to string
            $email = (string) $request->request->get('email', '');
            $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

            if (!$user) {
                $this->addFlash('error', 'No user found with this email.');
                return $this->redirectToRoute('app_forgot_password');
            }

            // Fix line 40: str_pad expects string, cast random_int result to string
            $code = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

            $reset = new PasswordResetCode();
            $reset->setUser($user);
            $reset->setCode($code);
            $reset->setExpiresAt(new \DateTime('+10 minutes'));

            $em->persist($reset);
            $em->flush();

            // Fix line 54: getEmail() returns string|null, use ?? ''
            $emailMessage = (new Email())
                ->from('azeraissaoui123@gmail.com')
                ->to($user->getEmail() ?? '')
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
        // Fix line 104: cast to string
        $email = (string) $request->query->get('email', '');
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $this->addFlash('error', 'Invalid email.');
            return $this->redirectToRoute('app_forgot_password');
        }

        if ($request->isMethod('POST') && $request->request->get('code')) {
            $inputCode    = (string) $request->request->get('code', '');
            $newPassword  = (string) $request->request->get('new_password', '');
            $confirmPassword = (string) $request->request->get('confirm_password', '');

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

            // Fix line 104: hashPassword expects string, $newPassword is already (string)
            $hashed = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashed);

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