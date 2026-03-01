<?php

namespace App\Repository;

use App\Entity\Session;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Session>
 */
class SessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    /**
     * Sessions avec relations pour FullCalendar
     *
     * @return Session[]
     */
    public function findAllWithRelations(): array
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.group',    'g')->addSelect('g')
            ->leftJoin('g.idLangue', 'l')->addSelect('l')
            ->leftJoin('g.idNiveau', 'n')->addSelect('n')
            ->leftJoin('s.user',     'u')->addSelect('u')
            ->orderBy('s.dateHeure', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Sessions planifiées avec places dispo — pour le contexte IA
     *
     * @return Session[]
     */
    public function findSessionsDisponibles(): array
    {
        return $this->createQueryBuilder('s')
            ->leftJoin('s.group',    'g')->addSelect('g')
            ->leftJoin('g.idLangue', 'l')->addSelect('l')
            ->leftJoin('g.idNiveau', 'n')->addSelect('n')
            ->where('s.statut = :statut')
            ->andWhere('s.dateHeure >= :now')
            ->setParameter('statut', 'planifiée')
            ->setParameter('now', new \DateTime())
            ->orderBy('s.dateHeure', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Query filtrée pour KnpPaginator — liste étudiants (index)
     *
     * ✅ PHPStan fix ligne 62 (missingType.iterableValue) :
     * $filters est array sans type de valeur → @param array<string, mixed>
     *
     * @param array<string, mixed> $filters
     */
    public function getFilteredQuery(
        array  $filters = [],
        string $sortBy  = 'dateHeure',
        string $order   = 'DESC'
    ): Query {
        $qb = $this->createQueryBuilder('s')
            ->leftJoin('s.group', 'g')
            ->addSelect('g');

        if (!empty($filters['statut'])) {
            $qb->andWhere('s.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        if (!empty($filters['groupe'])) {
            $qb->andWhere('g.id = :groupe')
               ->setParameter('groupe', $filters['groupe']);
        }

        if (!empty($filters['search'])) {
            $search = '%' . trim((string) $filters['search']) . '%';
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('s.lienReunion', ':search'),
                    $qb->expr()->like('s.statut',      ':search'),
                    $qb->expr()->like('g.nom',         ':search')
                )
            )->setParameter('search', $search);
        }

        $allowedSort = ['dateHeure', 'statut'];
        $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery();
    }

    /**
     * Query filtrée pour KnpPaginator — espace professeur
     *
     * ✅ PHPStan fix ligne 103 (missingType.iterableValue) :
     * $filters est array sans type de valeur → @param array<string, mixed>
     *
     * @param array<string, mixed> $filters
     */
    public function getFilteredQueryForProf(
        User   $prof,
        array  $filters = [],
        string $sortBy  = 'dateHeure',
        string $order   = 'DESC'
    ): Query {
        $qb = $this->createQueryBuilder('s')
            ->where('s.user = :prof')
            ->setParameter('prof', $prof);

        if (!empty($filters['statut'])) {
            $qb->andWhere('s.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        $allowedSort = ['dateHeure', 'statut'];
        $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery();
    }

    /**
     * Sessions d'un professeur — dashboard prof (liste paginée)
     */
    public function getQueryByProf(
        User   $prof,
        string $sortBy = 'dateHeure',
        string $order  = 'DESC'
    ): Query {
        $allowedSort = ['dateHeure', 'statut'];
        $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';

        return $this->createQueryBuilder('s')
            ->where('s.user = :prof')
            ->setParameter('prof', $prof)
            ->orderBy('s.' . $sortBy, $order)
            ->getQuery();
    }

    /**
     * Sessions d'un professeur — liste simple prof
     */
    public function getQueryByProfOrdered(User $prof): Query
    {
        return $this->createQueryBuilder('s')
            ->where('s.user = :prof')
            ->setParameter('prof', $prof)
            ->orderBy('s.dateHeure', 'DESC')
            ->getQuery();
    }

    /**
     * Sessions d'un professeur (array simple)
     *
     * ✅ PHPStan fix ligne 162 (missingType.iterableValue) :
     * $filters est array sans type de valeur → @param array<string, mixed>
     *
     * @param array<string, mixed> $filters
     * @return Session[]
     */
    public function getSessionsByProf(
        User   $prof,
        array  $filters = [],
        string $sortBy  = 'dateHeure',
        string $order   = 'DESC'
    ): array {
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.user = :prof')
            ->setParameter('prof', $prof);

        if (!empty($filters['statut'])) {
            $qb->andWhere('s.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        $allowedSort = ['dateHeure', 'statut'];
        $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';
        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery()->getResult();
    }

    /**
     * Sessions terminées d'un professeur
     *
     * @return Session[]
     */
    public function getTerminatedSessionsByProf(User $prof): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.user = :prof')
            ->andWhere('s.statut = :statut')
            ->setParameter('prof', $prof)
            ->setParameter('statut', 'terminée')
            ->orderBy('s.dateHeure', 'DESC')
            ->getQuery()
            ->getResult();
    }
}