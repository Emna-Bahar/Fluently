<?php

namespace App\Repository;

use App\Entity\Langue;
use App\Entity\Niveau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Niveau>
 */
class NiveauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Niveau::class);
    }

    /**
     * 
     * @param int|null $langueId ID de la langue pour filtrer
     * @param string|null $difficulte Niveau de difficulté (A1, A2, B1, etc.)
     * @param int|null $seuilMin Score minimum
     * @param int|null $seuilMax Score maximum
     * @return Niveau[] Tableau d'objets Niveau
     */
    public function findNiveauxFiltres(?int $langueId, ?string $difficulte, ?int $seuilMin, ?int $seuilMax): array
    {
        $qb = $this->createQueryBuilder('n');

        if ($langueId) {
            $qb->andWhere('n.Id_langue = :langue')
               ->setParameter('langue', $langueId);
        }

        if ($difficulte) {
            $qb->andWhere('n.difficulte = :difficulte')
               ->setParameter('difficulte', $difficulte);
        }

        if ($seuilMin !== null) {
            $qb->andWhere('n.seuil_score_min >= :seuilMin')
               ->setParameter('seuilMin', $seuilMin);
        }

        if ($seuilMax !== null) {
            $qb->andWhere('n.seuil_score_max <= :seuilMax')
               ->setParameter('seuilMax', $seuilMax);
        }

        /** @var Niveau[] $result */
        $result = $qb->orderBy('n.Id_langue', 'ASC')
            ->addOrderBy('n.ordre', 'ASC')
            ->getQuery()
            ->getResult();
            
        return $result;
    }

    /**
     * 
     * @param Langue $langue La langue concernée
     * @param int $ordreActuel L'ordre actuel
     * @return Niveau|null Le niveau suivant ou null s'il n'existe pas
     */
    public function findNiveauSuivant(Langue $langue, int $ordreActuel): ?Niveau
    {
        return $this->createQueryBuilder('n')
            ->where('n.Id_langue = :langue')
            ->andWhere('n.ordre = :ordre')
            ->setParameter('langue', $langue)
            ->setParameter('ordre', $ordreActuel + 1)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * 
     * @param Langue $langue La langue concernée
     * @param string $difficulte La difficulté recherchée (A1, A2, B1, etc.)
     * @return Niveau|null Le niveau trouvé ou null
     */
    public function findByLangueEtDifficulte(Langue $langue, string $difficulte): ?Niveau
    {
        return $this->createQueryBuilder('n')
            ->where('n.Id_langue = :langue')
            ->andWhere('n.difficulte = :difficulte')
            ->setParameter('langue', $langue)
            ->setParameter('difficulte', $difficulte)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}