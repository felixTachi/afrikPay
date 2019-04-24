<?php

namespace App\Repository;

use App\Entity\Paiementud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Paiementud|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paiementud|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paiementud[]    findAll()
 * @method Paiementud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiementudRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Paiementud::class);
    }

    // /**
    //  * @return Paiementud[] Returns an array of Paiementud objects
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
    public function findOneBySomeField($value): ?Paiementud
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
