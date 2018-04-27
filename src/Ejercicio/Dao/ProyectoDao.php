<?php

namespace Ejercicio\Dao;

use Core\CoreDao\GenericDao;



// Esta clase nos recoge los metodos base de doctrine y nos da la opcion de crear metodos especificos
class ProyectoDao extends GenericDao {

    public function __construct() {
        //te añade el constructor del padre automaticamente por que está obligado.
        parent::__construct();
        
        $this->entityName = '\Ejercicio\Entity\Proyecto';
        //entityName->hace referencia a las entidades Entity
    }

    
}  

   //uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado

