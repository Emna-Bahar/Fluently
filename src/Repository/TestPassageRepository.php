<?php

namespace App\Repository;

use App\Entity\TestPassage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestPassage>
 */
class TestPassageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestPassage::class);
    }

    /**
     * Recherche les passages avec filtres (search, statut, langue, test)
     * 
     * @return TestPassage[]
     */
    public function findByFilters(?string $search = null, ?string $statut = null, ?string $langueId = null, ?string $testId = null): array
    {
        $qb = $this->createQueryBuilder('tp')
            ->leftJoin('tp.test', 't')
            ->leftJoin('t.langue', 'l')
            ->leftJoin('tp.user', 'u')
            ->orderBy('tp.dateFin', 'DESC');

        if ($search !== null && $search !== '') {
            $qb->andWhere('
                LOWER(u.email) LIKE :search OR 
                LOWER(t.titre) LIKE :search OR 
                LOWER(l.nom) LIKE :search
            ')->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($statut !== null && $statut !== '') {
            $qb->andWhere('tp.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($langueId !== null && $langueId !== '') {
            $qb->andWhere('l.id = :langue')
               ->setParameter('langue', $langueId);
        }

        if ($testId !== null && $testId !== '') {
            $qb->andWhere('t.id = :test')
               ->setParameter('test', $testId);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Calcule le score moyen de tous les passages
     */
    public function getAverageScore(): float
    {
        $result = $this->createQueryBuilder('tp')
            ->select('AVG(tp.resultat)')
            ->getQuery()
            ->getSingleScalarResult();

        return is_numeric($result) ? (float) $result : 0.0;
    }
}