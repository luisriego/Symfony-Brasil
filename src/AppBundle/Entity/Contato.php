<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Contato
 *
 * @ORM\Table(name="contato")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContatoRepository")
 */
class Contato
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="menssagem", type="text", nullable=true)
     */
    private $menssagem;

    /**
     * @var string
     *
     * @Gedmo\Slug(fields={"nome"}, updatable=false)
     * @ORM\Column(name="slug", type="string", length=100, nullable=true)
     */
    protected $slug;


    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
    }

    public function __toString()
    {
        return $this->getNome();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Contato
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Contato
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contato
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set menssagem
     *
     * @param string $menssagem
     *
     * @return Contato
     */
    public function setMenssagem($menssagem)
    {
        $this->menssagem = $menssagem;

        return $this;
    }

    /**
     * Get menssagem
     *
     * @return string
     */
    public function getMenssagem()
    {
        return $this->menssagem;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Contato
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}

