<?php

namespace App\Repository;

use App\Entity\ProjetsEnCours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjetsEnCours>
 *
 * @method ProjetsEnCours|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjetsEnCours|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjetsEnCours[]    findAll()
 * @method ProjetsEnCours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetsEnCoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjetsEnCours::class);
    }

    public function add(ProjetsEnCours $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProjetsEnCours $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProjetsEnCours[] Returns an array of ProjetsEnCours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProjetsEnCours
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
