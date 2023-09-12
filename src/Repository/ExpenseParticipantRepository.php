<?php

namespace App\Repository;

use App\Entity\ExpenseParticipant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExpenseParticipant>
 *
 * @method ExpenseParticipant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpenseParticipant|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpenseParticipant[]    findAll()
 * @method ExpenseParticipant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpenseParticipantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExpenseParticipant::class);
    }

//    /**
//     * @return ExpenseParticipant[] Returns an array of ExpenseParticipant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ExpenseParticipant
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
