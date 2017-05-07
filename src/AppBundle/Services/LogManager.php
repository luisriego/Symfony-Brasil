<?php

namespace AppBundle\Services;

use AppBundle\Entity\Chamado;
use AppBundle\Entity\Log;
use AppBundle\Entity\Status;
use AppBundle\Entity\Upload;
use Doctrine\ORM\EntityManager;

/**
 * Class LogManager
 */
class LogManager
{
    private $em;

    /**
     * EventLogManager constructor.
     *
     * @param EntityManager $em
     */
    public function __construct($em)
    {
        $this->em = $em;
    }

    /**
     * Registrar um log e armazena-lo na BD
     *
     * @param Chamado $chamado
     * @param Status  $newStatus
     */
    public function registerLog(Chamado $chamado, Status $oldStatus)
    {
        $log = new Log();
        $log->setChamado($chamado);
        $log->setAnterior($oldStatus);
        $log->setAtual($chamado->getStatus());

        return $log;

//        $this->em->persist($log);
//        $this->em->flush();
//
//        if (!$chamado) {
//            throw $this->createNotFoundException('Não é um Chamado válido');
//        }
    }


    public function modifyLog(Chamado $chamado, $formuario)
    {
        if (!$chamado) {
            throw $this->createNotFoundException('Não é um Chamado válido');
        }


    }

    /**
     * Registra um Log quando um Upload foi feito
     *
     * @param Upload $upload
     */
    public function uploadLog(Upload $upload)
    {
        $log = new Log();

    }
}