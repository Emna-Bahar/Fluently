<?php

// src/Repository/UserProgressRepository.php

namespace App\Repository;

use App\Entity\Langue;
use App\Entity\User;
use App\Entity\UserProgress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserProgress>
 */
class UserProgressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserProgress::class);
    }

    /**
     * Returns the UserProgress row if the user has completed the niveau test
     * for the given langue (testNiveauComplete = true).
     * Niveau ID is intentionally NOT checked because the groupe and user_progress
     * may reference different Niveau rows that represent the same level.
     */
    public function findCompletedForGroup(User $user, int $langueId, ?int $niveauId): ?UserProgress
    {
        return $this->createQueryBuilder('up')
            ->where('up.user = :user')
            ->andWhere('IDENTITY(up.langue) = :langueId')
            ->andWhere('up.testNiveauComplete = true')
            ->setParameter('user', $user)
            ->setParameter('langueId', $langueId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findOrCreate(User $user, Langue $langue): UserProgress
    {
        $progress = $this->findOneBy([
            'user' => $user,
            'langue' => $langue,
        ]);

        if (!$progress) {
            $progress = new UserProgress();
            $progress->setUser($user);
            $progress->setLangue($langue);
            $progress->setTestNiveauComplete(false);
            $progress->setDernierNumeroCours(0);
            $progress->setDateDerniereActivite(new \DateTime());

            $this->getEntityManager()->persist($progress);
            $this->getEntityManager()->flush();
        }

        return $progress;
    }
}
