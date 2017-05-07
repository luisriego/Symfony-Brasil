<?php

namespace AppBundle\Services;

use AppBundle\Entity\Upload;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManager;

class FileUploader
{
    private $targetDir;
    protected $em;

    /**
     * FileUploader constructor.
     * @param $targetDir
     */
    public function __construct($targetDir, EntityManager $entityManager)
    {
        $this->targetDir = $targetDir;
        $this->em = $entityManager;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        if(is_uploaded_file($fileName))
        {
            return $fileName;
        }else{
            return false;
        }


    }

    public function guardar($fileName, $originalName, $client)
    {
        $upload = new Upload();
        $upload->setNome($originalName);
        $upload->setFile($fileName);
        $upload->setCliente($client);

        $this->em->persist($upload);

        $this->em->flush();

        return true;
    }

    public function getTargetDir()
    {
        return $this->targetDir;
    }
}