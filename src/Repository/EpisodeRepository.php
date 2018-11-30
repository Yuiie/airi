<?php

namespace App\Repository;

use App\Entity\Episode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @method Episode|null find($id, $lockMode = null, $lockVersion = null)
 * @method Episode|null findOneBy(array $criteria, array $orderBy = null)
 * @method Episode[]    findAll()
 * @method Episode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpisodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Episode::class);
    }


    public function findByPage($page = 1, $max = 10)
    {
        $dql = $this->createQueryBuilder('user');
        $dql->orderBy('user.id', 'DESC');

        $firstResult = ($page - 1) * $max;

        $query = $dql->getQuery();
        $query->setFirstResult($firstResult);
        $query->setMaxResults($max);

        $paginator = new Paginator($query);

        if(($paginator->count() <=  $firstResult) && $page != 1) {
            throw new NotFoundHttpException('Page not found');
        }

        return $paginator;
    }

    public function findOneByEp($id, $ep): ?Episode
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.anime = :id')
            ->andWhere('e.episode = :ep')
            ->setParameter('id', $id)
            ->setParameter('ep', $ep)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findByAnime($id)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.anime = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findEp($id, $ep): ?Episode
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.anime = :id')
            ->andWhere('e.episode = :ep')
            ->setParameter('id', $id)
            ->setParameter('ep', $ep)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
//    /**
//     * @return Episode[] Returns an array of Episode objects
//     */
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
    public function findOneBySomeField($value): ?Episode
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
