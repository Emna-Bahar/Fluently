<?php

namespace App\Repository;

use App\Entity\Tache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tache>
 */
class TacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class);
    }

    /**
     * @param string|null $search
     * @param string|null $statut
     * @param string|null $priorite
     * @return Tache[]
     */
    public function searchTaches(?string $search = null, ?string $statut = null, ?string $priorite = null): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.Id_objectif', 'o')
            ->addSelect('o');

        if ($search) {
            $qb->andWhere('t.titre LIKE :search OR t.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($statut) {
            $qb->andWhere('t.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($priorite) {
            $qb->andWhere('t.priorite = :priorite')
               ->setParameter('priorite', $priorite);
        }

        return $qb->orderBy('t.date_limite', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * @return array{total: int, statuts: array<string, int>, priorites: array<string, int>}
     */
    public function countByStatusAndPriority(): array
    {
        $total = $this->count([]);

        $statuts = $this->createQueryBuilder('t')
            ->select('t.statut, COUNT(t.id) as count')
            ->groupBy('t.statut')
            ->getQuery()
            ->getResult();

        $priorites = $this->createQueryBuilder('t')
            ->select('t.priorite, COUNT(t.id) as count')
            ->groupBy('t.priorite')
            ->getQuery()
            ->getResult();

        $counts = [
            'total'     => $total,
            'statuts'   => [],
            'priorites' => [],
        ];

        foreach ($statuts as $item) {
            $counts['statuts'][$item['statut']] = $item['count'];
        }

        foreach ($priorites as $item) {
            $counts['priorites'][$item['priorite']] = $item['count'];
        }

        return $counts;
    }

    /**
     * @return Tache[]
     */
    public function findAllOrderedByDateLimite(): array
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.date_limite', 'ASC')
            ->getQuery()
            ->getResult();
    }
}