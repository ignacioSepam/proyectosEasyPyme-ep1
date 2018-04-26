<?php
namespace Ejercicio\Action;

use Ejercicio\Action\GenericAction;
use Ejercicio\Dao\EmpleadoDao;
use Ejercicio\Validation\EmpleadoValidation;

class EmpleadoAction extends GenericAction {
    
   
    /**
     * Constructor
     */
    public function __construct() {
        
        // Establece los servicios para el action, le llegan del padre pero los hace suyos
        //almacema en serviceDao el objeto de empleado Dao
        $this->serviceDao = new EmpleadoDao();
        
        //almacena objeto empleoValidation();
        $this->serviceValidation = new EmpleadoValidation();
        
        parent::__construct();
    }

/*
    public Static function update($args,$data){
        
        $empleadoDao=new \entity\Dao\EmpleadoDao();
        $resultData=$empleadoDao->get($args);
        
        //me resulta tan interesante lo de abajo..
        //de $resultData llama a los metodos setEntidad
        $resultData->setNombre($data['nombre']);
        $resultData->setApellidos($data['apellidos']);
        $resultData->setEmail(\LogicValidation::email($data['email']));
        
       
        $empleadoDao->save($resultData);
        
        return $empleadoDao; 
    }
      
    */
}