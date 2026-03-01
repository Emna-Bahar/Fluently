<?php

namespace App\Repository;

use App\Entity\Langue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Langue>
 */
class LangueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Langue::class);
    }

    /**
     * 
     * @param string|null $search Terme de recherche optionnel
     * @return Langue[] Tableau d'objets Langue
     */
    public function findActiveLangues(?string $search): array
    {
        $qb = $this->createQueryBuilder('l')
            ->where('l.is_active = :active')
            ->setParameter('active', true);

        if ($search) {
            $qb->andWhere('LOWER(l.nom) LIKE :search')
               ->setParameter('search', '%' . strtolower($search) . '%');
        }

        /** @var Langue[] $result */
        $result = $qb->getQuery()->getResult();
        return $result;
    }

    /**
     * 
     * @param string|null $search Terme de recherche optionnel
     * @param string|null $active Filtre par statut actif/inactif
     * @return Langue[] Tableau d'objets Langue
     */
    public function findLanguesFiltrees(?string $search, ?string $active): array
    {
        $qb = $this->createQueryBuilder('l');

        if ($search) {
            $qb->andWhere('LOWER(l.nom) LIKE :search')
               ->setParameter('search', '%' . strtolower($search) . '%');
        }

        if ($active !== '') {
            $qb->andWhere('l.is_active = :active')
               ->setParameter('active', (bool)$active);
        }

        /** @var Langue[] $result */
        $result = $qb->getQuery()->getResult();
        return $result;
    }
}