<?php

namespace App\Repository;

use App\Entity\Groupe;
use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Message>
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    /**
     * Returns a QueryBuilder of messages for a groupe, ordered by date DESC.
     * Intended for KNP Paginator.
     */
    public function findByGroupeQueryBuilder(Groupe $groupe): QueryBuilder
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.Id_groupe = :g')
            ->setParameter('g', $groupe)
            ->orderBy('m.date_creation', 'DESC');
    }

    /**
     * Returns all messages of a groupe ordered by date DESC.
     *
     * @return Message[]
     */
    public function findByGroupe(Groupe $groupe): array
    {
        return $this->findBy(
            ['Id_groupe' => $groupe],
            ['date_creation' => 'DESC']
        );
    }

    /**
     * Searches messages of a groupe by content, author first name or last name.
     *
     * @return Message[]
     */
    public function searchByGroupe(Groupe $groupe, string $q): array
    {
        return $this->createQueryBuilder('m')
            ->leftJoin('m.Id_user', 'u')
            ->andWhere('m.Id_groupe = :g')
            ->andWhere('m.contenu LIKE :q OR u.nom LIKE :q OR u.prenom LIKE :q')
            ->setParameter('g', $groupe)
            ->setParameter('q', '%' . $q . '%')
            ->orderBy('m.date_creation', 'DESC')
            ->addOrderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
