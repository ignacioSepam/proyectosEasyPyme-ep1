<?php
namespace Ejercicio\Action;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Ejercicio\Action\GenericAction;
use Ejercicio\Dao\RealizaDao;
use Ejercicio\Validation\RealizaValidation;

class RealizaAction extends GenericAction {
    
   
    /**
     * Constructor
     */
    public function __construct() {
        
        // Establece los servicios para el action, le llegan del padre pero los hace suyos
        //almacema en serviceDao el objeto de realiza Dao
        $this->serviceDao = new RealizaDao();
        
        //almacena objeto realizaValidation();
        $this->serviceValidation = new RealizaValidation();
        
        parent::__construct();
    }
}