<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Treinamento
 *
 * @ORM\Table(name="treinamento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TreinamentoRepository")
 */
class Treinamento
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
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="quando", type="string", length=50, nullable=true)
     */
    private $quando;

    /**
     * @var int
     *
     * @ORM\Column(name="duracao", type="integer", nullable=true)
     */
    private $duracao;

    /**
     * @var string
     *
     * @ORM\Column(name="skill", type="string", length=100, nullable=true)
     */
    private $skill;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var int
     *
     * @ORM\Column(name="onde", type="integer", nullable=true)
     */
    private $onde;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="idioma", type="integer", nullable=true)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="datalhes", type="text", nullable=true)
     */
    private $datalhes;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=25, nullable=true)
     */
    private $codigo;


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
     * @return Treinamento
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
     * Set link
     *
     * @param string $link
     *
     * @return Treinamento
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Treinamento
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Treinamento
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set quando
     *
     * @param string $quando
     *
     * @return Treinamento
     */
    public function setQuando($quando)
    {
        $this->quando = $quando;

        return $this;
    }

    /**
     * Get quando
     *
     * @return string
     */
    public function getQuando()
    {
        return $this->quando;
    }

    /**
     * Set duracao
     *
     * @param integer $duracao
     *
     * @return Treinamento
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get duracao
     *
     * @return int
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set skill
     *
     * @param string $skill
     *
     * @return Treinamento
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return string
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Treinamento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set onde
     *
     * @param integer $onde
     *
     * @return Treinamento
     */
    public function setOnde($onde)
    {
        $this->onde = $onde;

        return $this;
    }

    /**
     * Get onde
     *
     * @return int
     */
    public function getOnde()
    {
        return $this->onde;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Treinamento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idioma
     *
     * @param integer $idioma
     *
     * @return Treinamento
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return int
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set datalhes
     *
     * @param string $datalhes
     *
     * @return Treinamento
     */
    public function setDatalhes($datalhes)
    {
        $this->datalhes = $datalhes;

        return $this;
    }

    /**
     * Get datalhes
     *
     * @return string
     */
    public function getDatalhes()
    {
        return $this->datalhes;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Treinamento
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}

