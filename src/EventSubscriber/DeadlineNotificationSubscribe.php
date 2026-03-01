<?php

namespace App\EventSubscriber;

use App\Repository\ObjectifRepository;
use Flasher\Prime\FlasherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class DeadlineNotificationSubscriber implements EventSubscriberInterface
{
   public function __construct(
    private ObjectifRepository $objectifRepository,
    private FlasherInterface   $flasher
) {}

    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::REQUEST => ['onKernelRequest', -10]];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) return;
        if ($event->getRequest()->isXmlHttpRequest()) return;

        // Uniquement sur la page objectifs
        $route = $event->getRequest()->attributes->get('_route');
        if ($route !== 'app_objectif_index') return;

        $now     = new \DateTime();
        $bientot = (clone $now)->modify('+3 days');

        $echoues = $this->objectifRepository->createQueryBuilder('o')
            ->where('o.date_fin < :now')
            ->andWhere('o.statut NOT IN (:statuts)')
            ->setParameter('now', $now)
            ->setParameter('statuts', ['complete', 'abandonne'])
            ->getQuery()->getResult();

        foreach ($echoues as $objectif) {
            $this->flasher->addError($objectif->getTitre(), 'echec');
        }

        $expires = $this->objectifRepository->createQueryBuilder('o')
            ->where('o.date_fin BETWEEN :now AND :bientot')
            ->andWhere('o.statut NOT IN (:statuts)')
            ->setParameter('now', $now)
            ->setParameter('bientot', $bientot)
            ->setParameter('statuts', ['complete', 'abandonne'])
            ->getQuery()->getResult();

        foreach ($expires as $objectif) {
            $this->flasher->addWarning($objectif->getTitre(), 'bientot');
        }
    }
}