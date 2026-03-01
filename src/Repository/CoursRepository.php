<?php

namespace App\Repository;

use App\Entity\Cours;
use App\Entity\Niveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cours>
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }

    /**
     * @param int|null $langueId
     * @param string|null $difficulte
     * @return Cours[] Tableau d'objets Cours
     */
    public function findCoursFiltres(?int $langueId, ?string $difficulte): array
    {
        $qb = $this->createQueryBuilder('c')
            ->join('c.Id_niveau', 'n')
            ->join('n.Id_langue', 'l')
            ->orderBy('l.nom', 'ASC')
            ->addOrderBy('n.ordre', 'ASC')
            ->addOrderBy('c.numero', 'ASC');

        if ($langueId) {
            $qb->andWhere('l.id = :langueId')
               ->setParameter('langueId', $langueId);
        }

        if ($difficulte) {
            $qb->andWhere('n.difficulte = :difficulte')
               ->setParameter('difficulte', $difficulte);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * @param Niveau $niveau
     * @return Cours[] Tableau d'objets Cours
     */
    public function findCoursByLangue(Niveau $niveau): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.Id_niveau', 'n')
            ->where('n.Id_langue = :langue')
            ->setParameter('langue', $niveau->getIdLangue())
            ->orderBy('n.ordre', 'ASC')
            ->addOrderBy('c.numero', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function countByNiveau(Niveau $niveau): int
    {
        $result = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.Id_niveau = :niveau')
            ->setParameter('niveau', $niveau)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null ? (int) $result : 0;
    }
}