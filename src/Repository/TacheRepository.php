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
     * Recherche de tâches par titre, description, statut et priorité
     * 
     * @param string|null $search Terme de recherche
     * @param string|null $statut Filtre par statut
     * @param string|null $priorite Filtre par priorité
     * @return Tache[] Tableau de tâches
     */
    public function searchTaches(?string $search = null, ?string $statut = null, ?string $priorite = null): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.Id_objectif', 'o')
            ->addSelect('o');

        // Filtre de recherche par titre ou description
        if ($search) {
            $qb->andWhere('t.titre LIKE :search OR t.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Filtre par statut
        if ($statut) {
            $qb->andWhere('t.statut = :statut')
               ->setParameter('statut', $statut);
        }

        // Filtre par priorité
        if ($priorite) {
            $qb->andWhere('t.priorite = :priorite')
               ->setParameter('priorite', $priorite);
        }

        return $qb->orderBy('t.date_limite', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Compte les tâches par statut et priorité
     * 
     * @return array
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
            'total' => $total,
            'statuts' => [],
            'priorites' => []
        ];

        foreach ($statuts as $item) {
            $counts['statuts'][$item['statut']] = $item['count'];
        }

        foreach ($priorites as $item) {
            $counts['priorites'][$item['priorite']] = $item['count'];
        }

        return $counts;
    }
}
