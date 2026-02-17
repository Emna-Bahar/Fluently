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
     * Retourne une Query filtrée et triée prête pour KnpPaginator
     */
    public function getFilteredQuery(array $filters = [], string $sortBy = 'dateHeure', string $order = 'DESC'): Query
    {
        $qb = $this->createQueryBuilder('s')
            ->leftJoin('s.group', 'g')
            ->addSelect('g');

        if (!empty($filters['statut'])) {
            $qb->andWhere('s.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        if (!empty($filters['groupe'])) {
            $qb->andWhere('s.group = :groupe')
               ->setParameter('groupe', $filters['groupe']);
        }

        if (!empty($filters['search'])) {
            $search = '%' . trim($filters['search']) . '%';
            $qb->andWhere('s.lienReunion LIKE :search OR s.statut LIKE :search OR g.nom LIKE :search')
               ->setParameter('search', $search);
        }

        $allowedSort = ['dateHeure', 'statut'];
        $sortBy = in_array($sortBy, $allowedSort) ? $sortBy : 'dateHeure';

        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery();
    }

    /**
     * Sessions d'un professeur donné (renommé pour éviter magie Doctrine)
     */
    public function getSessionsByProf(User $prof, array $filters = [], string $sortBy = 'dateHeure', string $order = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.user = :prof')
            ->setParameter('prof', $prof);

        if (!empty($filters['statut'])) {
            $qb->andWhere('s.statut = :statut')
            ->setParameter('statut', $filters['statut']);
        }

        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery()->getResult();
    }

    /**
     * Sessions terminées d'un professeur
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