<?php

namespace App\EventListener;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener(event: LogoutEvent::class)]
class LogoutListener
{
    public function __construct(private EntityManagerInterface $em) {}

    public function __invoke(LogoutEvent $event): void
    {
        $user = $event->getToken()?->getUser();

        if ($user instanceof User) {
            $user->setStatut('offline');
            $this->em->flush();
        }
    }
}
