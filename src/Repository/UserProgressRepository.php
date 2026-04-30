<?php

namespace App\Repository;

use App\Entity\Langue;
use App\Entity\Niveau;
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

    public function findUserProgressByNiveau(User $user, Langue $langue, Niveau $niveau): ?UserProgress
{
    return $this->createQueryBuilder('up')
        ->andWhere('up.user = :user')
        ->andWhere('up.langue = :langue')
        ->andWhere('up.niveauActuel = :niveau')
        ->setParameter('user', $user)
        ->setParameter('langue', $langue)
        ->setParameter('niveau', $niveau)
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
}
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
            $progress->setDateDerniereActivite(new \DateTimeImmutable());

            $this->getEntityManager()->persist($progress);
            $this->getEntityManager()->flush();
        }

        return $progress;
    }

    public function findUserProgress(User $user, Langue $langue): ?UserProgress
    {
        return $this->findOneBy([
            'user' => $user,
            'langue' => $langue
        ]);
    }
}