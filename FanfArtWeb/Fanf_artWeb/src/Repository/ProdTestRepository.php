<?php

namespace App\Repository;

use App\Entity\ProdTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProdTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProdTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProdTest[]    findAll()
 * @method ProdTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProdTest::class);
    }

    // /**
    //  * @return ProdTest[] Returns an array of ProdTest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProdTest
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
