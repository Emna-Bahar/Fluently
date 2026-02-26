<?php

namespace App\Repository;

use App\Entity\MessageLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MessageLog>
 */
class MessageLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessageLog::class);
    }

    /**
     * Return the most recent logs for a given group, newest first.
     *
     * @return MessageLog[]
     */
    public function findByGroupe(int $groupeId, int $limit = 50): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.groupeId = :gid')
            ->setParameter('gid', $groupeId)
            ->orderBy('l.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
