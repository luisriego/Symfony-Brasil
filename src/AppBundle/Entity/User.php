<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

//use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     * @Assert\NotBlank
     */
    protected $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sobrenome", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     */
    protected $sobrenome;

    /**
     * @var string
     */
    protected $nomeCompleto;

    /**
     * @ORM\Column(name="avatar", type="string", nullable=true)
     */
    protected $avatar;

    /**
     * @ORM\Column(name="link", type="string", nullable=true)
     */
    protected $link;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Post", mappedBy="user", cascade={"remove"})
     */
    private $posts;

    public function __construct()
    {
        parent::__construct();
        $this->nomeCompleto = $this->nome .' '. $this->sobrenome;
        $this->posts    = new ArrayCollection();
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return User
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
     * Set sobrenome
     *
     * @param string $sobrenome
     *
     * @return User
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get sobrenome
     *
     * @return string
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Get nome_completo
     *
     * @return string
     */
    public function getNomeCompleto()
    {
        return $this->nome . ' '. $this->sobrenome;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return User
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return User
     */
    public function addPost(\AppBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Post $post
     */
    public function removePost(\AppBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
