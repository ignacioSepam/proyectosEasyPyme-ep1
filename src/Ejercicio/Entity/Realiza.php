<?php
namespace Ejercicio\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @Orm\Table(name="Realiza")
 * 
 * @ManyToOne(targetEntity="Ejercicio\Entity\Empleado", inversedBy="Realiza")
 * @JoinColumn(name="idEmpleado", referencedColumnName="id")
 * 
 * @ManyToOne(targetEntity="Ejercicio\Entity\Proyecto", inversedBy="Realiza")
 * @JoinColumn(name="idProyecto", referencedColumnName="id")
 */

class Realiza{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     *@ORM\Column(name="idProyecto",type="integer",length=5)
     */
    protected $idProyecto;
    
    
    /**
     * @ORM\Column(name="idEmpleado",type="integer",length=5)
     */
    protected $idEmpleado;
    
    /**
     * 
     * @ORM\Column(name="fecha",type="string")
     */
    protected $fecha;
    
    /**
     * 
     * @ORM\Column(name="tiempo",type="string")
     */
    
    protected $tiempo;
    
    /**
     * 
     * @ORM\Column(name="tarea",type="string")
     */

    protected $tarea;



    public function getData()
    {
        return array(
            'id' => $this->id,
            'idProyecto' => $this->idProyecto,
            'idEmpleado'=> $this->idEmpleado,
            'fecha'=> $this->fecha,
            'tiempo'=> $this->tiempo,
            'tarea'=> $this->tarea
        );
    }
    
    public function setData($data)
    {
        $this->id =$data['id'] ?? NULL;
        $this->idProyecto =$data['idProyecto'] ?? NULL;
        $this->idEmpleado =$data['idEmpleado'] ?? NULL;
        $this->fecha =$data['fecha'] ?? NULL;
        $this->tiempo =$data['tiempo'] ?? NULL;
        $this->tarea =$data['tarea'] ?? NULL;    
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
     * Set idProyecto.
     *
     * @param string $idProyecto
     *
     * @return Realiza
     */
    public function setIdProyecto($idProyecto)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto.
     *
     * @return string
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set idEmpleado.
     *
     * @param string $idEmpleado
     *
     * @return Realiza
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado.
     *
     * @return string
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set fecha.
     *
     * @param string $fecha
     *
     * @return Realiza
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha.
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tiempo.
     *
     * @param string $tiempo
     *
     * @return Realiza
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo.
     *
     * @return string
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set tarea.
     *
     * @param string $tarea
     *
     * @return Realiza
     */
    public function setTarea($tarea)
    {
        $this->tarea = $tarea;

        return $this;
    }

    /**
     * Get tarea.
     *
     * @return string
     */
    public function getTarea()
    {
        return $this->tarea;
    }
}
