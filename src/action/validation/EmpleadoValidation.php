<?php
namespace action\validation;

use action\validation\GenericValidation;
use utilidades\Check;

class EmpleadoValidation extends GenericValidation {
    
    public function __construct() {
        parent::__construct();
    }


    public static function checkToInsert($entity){
        
        $data=$entity->getEmail();
       
        //verifica
       
      if (Check::email($data)===false){ 
        die('la direccion de email no es correcta');
        //hay un error, si quito esto funciona
       }
       
    }
     //si la respuesta es falsa, responde con un excepción
    
    public static function checkToUpdate($entity){
        
        $data=$entity->getEmail();
        
        // verifica
        if(!Check::email($data)){
            throw new Exception('La direccion de email no es correcta');
        }
         }
     //si la respuesta es falsa, responde con un excepción 
    }
    
    
