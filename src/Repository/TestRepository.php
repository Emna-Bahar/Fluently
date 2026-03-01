<?php

namespace App\Repository;

use App\Entity\Test;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Test>
 */
class TestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Test::class);
    }

    /**
     * Recherche les tests avec filtres (search, type, langue)
     * 
     * @return Test[]
     */
    public function findByFilters(?string $search = null, ?string $type = null, ?string $langueId = null): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.langue', 'l')
            ->leftJoin('t.questions', 'q')
            ->orderBy('t.titre', 'ASC');

        if ($search !== null && $search !== '') {
            $qb->andWhere('LOWER(t.titre) LIKE :search OR LOWER(t.type) LIKE :search')
               ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($type !== null && $type !== '') {
            $qb->andWhere('t.type = :type')
               ->setParameter('type', $type);
        }

        if ($langueId !== null && $langueId !== '') {
            $qb->andWhere('l.id = :langue')
               ->setParameter('langue', $langueId);
        }

        return $qb->getQuery()->getResult();
    }

    //    /**
    //     * @return Test[] Returns an array of Test objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Test
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}