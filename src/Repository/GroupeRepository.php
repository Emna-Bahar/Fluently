<?php

namespace App\Repository;

use App\Entity\Groupe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Groupe>
 */
class GroupeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Groupe::class);
    }

    /**
     * Returns all groupes with their langue and niveau eagerly loaded
     * to avoid N+1 queries.
     *
     * @return Groupe[]
     */
    public function findAllWithDetails(): array
    {
        return $this->createQueryBuilder('g')
            ->addSelect('l', 'n')
            ->leftJoin('g.ID_langue', 'l')
            ->leftJoin('g.Id_niveau', 'n')
            ->orderBy('g.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
