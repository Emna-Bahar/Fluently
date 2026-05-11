<?php

namespace App\Repository;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * @return Reservation[]
     */
    public function findBySession(Session $session): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.session = :session')
            ->setParameter('session', $session)
            ->leftJoin('r.user', 'u')
            ->addSelect('u')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Reservation[]
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('r.session', 's')
            ->addSelect('s')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Réservations en attente pour un professeur (dashboard).
     *
     * @return Reservation[]
     */
    public function findPendingForProf(User $prof): array
    {
        return $this->createQueryBuilder('r')
            ->join('r.session', 's')
            ->andWhere('s.user = :prof')
            ->andWhere('r.statut = :statut')
            ->setParameter('prof', $prof)
            ->setParameter('statut', 'en attente')
            ->leftJoin('r.user', 'etudiant')
            ->addSelect('etudiant')
            ->orderBy('r.dateReservation', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Toutes les réservations pour les sessions d'un professeur.
     *
     * ✅ FIX : deux requêtes indépendantes (pas de clone) pour éviter
     * les problèmes de partage d'état du QueryBuilder Doctrine.
     * Les "en attente" apparaissent en premier, puis les autres.
     *
     * @return Reservation[]
     */
    public function findAllForProf(User $prof): array
    {
        // 1. Réservations "en attente" — en premier
        /** @var Reservation[] $pending */
        $pending = $this->createQueryBuilder('r')
            ->join('r.session', 's')
            ->join('s.user', 'profUser')
            ->leftJoin('r.user', 'etudiant')
            ->leftJoin('s.group', 'g')
            ->addSelect('s', 'etudiant', 'g')
            ->where('profUser = :prof')
            ->andWhere('r.statut = :statut')
            ->setParameter('prof', $prof)
            ->setParameter('statut', 'en attente')
            ->orderBy('r.dateReservation', 'ASC')
            ->getQuery()
            ->getResult();

        // 2. Toutes les autres (confirmée, acceptée, refusée, annulée)
        /** @var Reservation[] $others */
        $others = $this->createQueryBuilder('r')
            ->join('r.session', 's')
            ->join('s.user', 'profUser')
            ->leftJoin('r.user', 'etudiant')
            ->leftJoin('s.group', 'g')
            ->addSelect('s', 'etudiant', 'g')
            ->where('profUser = :prof')
            ->andWhere('r.statut != :statut')
            ->setParameter('prof', $prof)
            ->setParameter('statut', 'en attente')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();

        return array_merge($pending, $others);
    }

    /**
     * Réservations récentes (hors "en attente") pour le dashboard prof.
     *
     * @return Reservation[]
     */
    public function findRecentForProf(User $prof, int $limit = 12): array
    {
        return $this->createQueryBuilder('r')
            ->join('r.session', 's')
            ->where('s.user = :prof')
            ->andWhere('r.statut != :en_attente')
            ->setParameter('prof', $prof)
            ->setParameter('en_attente', 'en attente')
            ->orderBy('r.dateReservation', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}