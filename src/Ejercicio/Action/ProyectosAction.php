<?php
namespace Ejercicio\Action;

use Ejercicio\Action\GenericAction;
use Ejercicio\Dao\ProyectoDao;
use Ejercicio\Validation\ProyectosValidation;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProyectosAction extends GenericAction{
    
    public function __construct() {
        
        $this->serviceDao = new ProyectoDao();
        
        $this->serviceValidation = new ProyectosValidation();        
        parent::__construct();
    }

/*
    //el resto proviene de la clase extendida 
    public Static function update($args,$data){
        
        $proyectoDao=new \entity\Dao\ProyectoDao();
        
        $resultData= $proyectoDao->get($args);
        
        //me resulta tan interesante lo de abajo..
        //de $resultData llama a los metodos setEntidad
        $resultData->setNombre($data['nombre']);
        $resultData->setDescripcion($data['descripcion']);
        
        
       
        $proyectoDao->save($resultData);
        
        return $proyectoDao; 
  
  
 */
}