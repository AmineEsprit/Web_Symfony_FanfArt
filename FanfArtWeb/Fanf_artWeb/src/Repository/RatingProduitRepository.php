<?php

namespace App\Repository;

use App\Entity\RatingProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RatingProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method RatingProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method RatingProduit[]    findAll()
 * @method RatingProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RatingProduit::class);
    }

    // /**
    //  * @return RatingProduit[] Returns an array of RatingProduit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RatingProduit
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
