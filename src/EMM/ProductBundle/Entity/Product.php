<?php

namespace EMM\ProductBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EMM\ProductBundle\Entity\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=100)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     * @Assert\Length(
     *      min = 4,
     *      max = 10,
     *      minMessage = "El campo debe contener minimo 4 caracteres",
     *      maxMessage = "El campo debe contener maximo 10 caraceres"
     * )
    
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=1003)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     @Assert\Length(
     *      min = 4,
     *      minMessage = "El campo debe contener minimo 4 caracteres",
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=100)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=100)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="string", length=100)
     * @Assert\Notblank()
     * @Assert\Regex(
     *     pattern="/[^\w\.@-]/",
     *     match=false,
     *     message="No puede contener espacio ni caracteres especiales"
     * )
     * * @Assert\Regex(
     *     pattern="/^[a-z]+$/i",
     *     match=false,
     *     message="Debe contener solo digitos"
     * )
     */
    private $precio;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Product
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

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Product
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Product
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Product
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Product
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Product
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
