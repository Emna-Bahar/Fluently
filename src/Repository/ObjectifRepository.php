<?php

namespace App\Repository;

use App\Entity\Objectif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Objectif>
 */
class ObjectifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Objectif::class);
    }

    public function createOrderedByIdDescQuery(): Query
    {
        return $this->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC')
            ->getQuery();
    }

    /**
     * @return Objectif[]
     */
    public function findEchoues(\DateTime $now): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.date_fin < :now')
            ->andWhere('o.statut NOT IN (:statuts)')
            ->setParameter('now', $now)
            ->setParameter('statuts', ['complete', 'abandonne'])
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Objectif[]
     */
    public function findExpirantBientot(\DateTime $now, \DateTime $bientot): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.date_fin BETWEEN :now AND :bientot')
            ->andWhere('o.statut NOT IN (:statuts)')
            ->setParameter('now', $now)
            ->setParameter('bientot', $bientot)
            ->setParameter('statuts', ['complete', 'abandonne'])
            ->getQuery()
            ->getResult();
    }
}