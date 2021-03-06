<?php

namespace AppBundle\Repository;

/**
 * EventoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventoRepository extends \Doctrine\ORM\EntityRepository
{
    public function findDestacado()
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
                                SELECT e
                                FROM AppBundle:Evento e
                                WHERE e.destacado = 1
                                AND MONTH(e.dataInicio) < :data
                                ');
        $consulta->setParameter('data', new \DateTime('now'));
        return $consulta->getOneOrNullResult();
    }

    public function findDestacados()
    {
        $em = $this->getEntityManager($limite = 3);
        $consulta = $em->createQuery('
                                SELECT e
                                FROM AppBundle:Evento e
                                WHERE MONTH(e.dataInicio) < :data
                                ORDER BY e.dataInicio ASC
                                ');
        $consulta->setParameter('data', new \DateTime('now'));
        $consulta->setMaxResults($limite);
        return $consulta->getResult();
    }
}
