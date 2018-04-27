<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Proyectos")
 * 
 * @OneToMany(targetEntity="\Ejercicio\Entity\Realiza", mappedBy="Proyecto")
 */

class Proyecto{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="nombre",type="string",length=100)
     * 
     */
    
    protected $nombre;
    /**
     *
     * @ORM\Column(name="descripcion",type="string")
     *
     * 
     */
    
    protected $descripcion;
    
    public function setData($data)
    {
        $this->id           = $data['id'] ?? null;
        $this->nombre       = $data['nombre'] ?? null;
        $this->descripcion  = $data['descripcion'] ?? null;
        
    }


    public function getData(){
        return array(
           'id'=> $this->id,
            'nombre'=> $this->nombre,
            'descripcion'=> $this->descripcion,
                 
        );
    
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
