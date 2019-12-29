<?php

namespace App\Repository;

use App\Entity\Etudiants;
use App\Entity\EtudiantSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method Etudiants|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etudiants|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etudiants[]    findAll()
 * @method Etudiants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudiants::class);
    }

    public function findAllStudents() {
        return $this->createQueryBuilder('e')
            ->orderBy('e.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    // public function findByName(EtudiantSearch $search) {
    //     return $this->createQueryBuilder('e')
    //         ->where('e.Nom = :mot')
    //         ->setParameter('mot', $search->getNom())
    //         ->getQuery()
    //         ->getResult()
    //         ;
    // }
    // public function findByNiveau(EtudiantSearch $search) {
    //     return $this->createQueryBuilder('e')
    //         ->where('e.Niveau = :niv')
    //         ->setParameter('niv', $search->getNiveau())
    //         ->getQuery()
    //         ->getResult()
    //         ;
    // }

    public function findByFilter(EtudiantSearch $search){
        $query = $this->findAll();
        if($search->getNiveau()){
            $query = $query
            ->where("e.Niveau = :niv")
            ->setParameter('niv', $search->getNiveau())
        ;
        }
        if($search->getNom()){
            $query = $query
            ->where("e.Nom = :mot")
            ->setParameter('mot', $search->getNom())
        ;
        }
        return $query;
        // $query = $this->findAll();
        // return $query;
        // if($search->getNiveau()){
        //     $this->findByNiveau($search);
        // }
        // if($search->getNom()) {
        //     $this->findByName($search);
        // }
    }

    // /**
    //  * @return Etudiants[] Returns an array of Etudiants objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Etudiants
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
