<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param int $limit
     * @return array
     */
    public function findPosts($limit = 10)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT p, u
                                FROM AppBundle:Post p
                                JOIN p.user u
                                WHERE p.type != :case
                                ORDER BY p.createdAt
                                ');
        $consulta->setParameter('case', 'case-studies');
        $consulta->setMaxResults($limit);
        return $consulta->getResult();
    }

    public function findPost($slug)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT p, u
                                FROM AppBundle:Post p
                                JOIN p.user u
                                WHERE p.slug = :slug
                                ');
        $consulta->setParameter('slug', $slug);
        return $consulta->getOneOrNullResult();
    }

    public function findCaseStudies($limit = 10)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT p, u
                                FROM AppBundle:Post p
                                JOIN p.user u
                                WHERE p.type = :case
                                ORDER BY p.createdAt
                                ');
        $consulta->setParameter('case', 'case-studies');
        $consulta->setMaxResults($limit);
        return $consulta->getResult();
    }

    public function findCaseAWeek($limit = 10)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT p, u
                                FROM AppBundle:Post p
                                JOIN p.user u
                                WHERE p.type = :case
                                ORDER BY p.createdAt
                                ');
        $consulta->setParameter('case', 'a-week-of-symfony');
        $consulta->setMaxResults($limit);
        return $consulta->getResult();
    }

    public function findEventsSemPublicar($limit = 10)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT e
                                FROM AppBundle:Evento e
                                WHERE e.publicar = false
                                AND e.noBrasil = true
                                ORDER BY e.dataInicio
                                ');
        $consulta->setMaxResults($limit);
        return $consulta->getResult();
    }

    public function findEvents($limit = 10)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT e, a
                                FROM AppBundle:Evento e
                                JOIN e.author a
                                WHERE e.publicar = true
                                AND e.noBrasil = true
                                ORDER BY e.dataInicio
                                ');
        $consulta->setMaxResults($limit);
        return $consulta->getResult();
    }
}