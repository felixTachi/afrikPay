<?php

namespace App\Repository;

use App\Entity\UdCompte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UdCompte|null find($id, $lockMode = null, $lockVersion = null)
 * @method UdCompte|null findOneBy(array $criteria, array $orderBy = null)
 * @method UdCompte[]    findAll()
 * @method UdCompte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UdCompteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UdCompte::class);
    }

    // /**
    //  * @return UdCompte[] Returns an array of UdCompte objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UdCompte
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
