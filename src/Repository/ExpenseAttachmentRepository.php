<?php

namespace App\Repository;

use App\Entity\ExpenseAttachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExpenseAttachment>
 *
 * @method ExpenseAttachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpenseAttachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpenseAttachment[]    findAll()
 * @method ExpenseAttachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpenseAttachmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExpenseAttachment::class);
    }

//    /**
//     * @return ExpenseAttachment[] Returns an array of ExpenseAttachment objects
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

//    public function findOneBySomeField($value): ?ExpenseAttachment
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
