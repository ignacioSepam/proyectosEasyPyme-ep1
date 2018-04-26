<?php

namespace Ejercicio\Dao;
use Ejercicio\Dao\GenericDao;

class RealizaDao extends GenericDao {
    
    //constructor
    
    public function __construct() {
        parent::__construct();
        
        $this->entityName = '\Ejercicio\Entity\Realiza';
    }
    
    
    
    
    
}

  //uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado