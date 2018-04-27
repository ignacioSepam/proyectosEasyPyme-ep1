<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Empleado")
 * 
 * @OneToMany(targetEntity="\Ejercicio\Entity\Realiza", mappedBy="Empleado")
 * 
 */

class Empleado {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="nombre",type="string",length=100)
     */
    protected $nombre;
    
    
    /**
     * @ORM\Column(name="apellidos",type="string",length=100)
     */
    protected $apellidos;
    
    
    /**
     * @ORM\Column(name="email",type="string")
     */
    protected $email;


    public function getData(){
        return array(
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'email'=> $this->email
        );
    }
    
    
    public function setData($data){
        $this->id           = $data['id'] ?? null;
        $this->nombre       = $data['nombre'] ?? null;
        $this->apellidos    = $data['apellidos'] ?? null;
        $this->email        = $data['email'] ?? null;
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
        $this->id=$id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Empleado
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
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
