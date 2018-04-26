<?php

namespace entity\Dao;
use entity\Dao\GenericDao;

class RealizaDao extends GenericDao {
    
    //constructor
    
    public function __construct() {
        parent::__construct();
        
        $this->entityName = '\entity\Entity\Realiza';
    }
    
    
    
    
    
}

  //uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado