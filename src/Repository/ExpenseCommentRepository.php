<?php

namespace App\Repository;

use App\Entity\ExpenseComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExpenseComment>
 *
 * @method ExpenseComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpenseComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpenseComment[]    findAll()
 * @method ExpenseComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpenseCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExpenseComment::class);
    }

//    /**
//     * @return ExpenseComment[] Returns an array of ExpenseComment objects
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

//    public function findOneBySomeField($value): ?ExpenseComment
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
