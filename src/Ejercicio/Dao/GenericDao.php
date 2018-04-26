<?php

namespace Ejercicio\Dao;

use Ejercicio\Dao\Dao;
//hace referencia a la clase Dao que se encuentra dentro de la carpeta Dao

//al ser una clase abstracta, nos prohibe su instanciacion pero 
//*OBLIGA* a sus hijas la implementación (reducimos código).
abstract class GenericDao extends Dao{
    
    protected $entityName;
    
    public function __construct() {
    }
    
    
    /**
     * @param $id
     * @return string
     */
    
    // Recupera los datos de la entidad de 
    public function get($id = null){
        $em = $this->getEntityManager();
        
        //el repositorio, objeto que nos permite solicitar y actualizar datos, 
        //la entityName hace referencia al lugar donde está almacenada la entidad
        
        //getRepositoy trae metodos mágicos (findAll etc)
        $rp = $em->getRepository($this->entityName);
        
        //si el id es nulo, devuelve todos los registros tabla. es Un array
        if($id === null){
             return $rp->findAll();
        }
        //nos devuelve SOLO un registro que irian dentro del where
        return $rp->findOneBy(array('id' => $id));
    }
    
    
    
    public function save($entity){
        $em = $this->getEntityManager();
        //con persist inserta y actualiza
        $em->persist($entity);
        //flush manda la orden para que haga todos
        $em->flush();
    }
    
    
    
    public function delete($entity){
        $em = $this->getEntityManager();
        $em->remove($entity);
        $em->flush();
    }
    
    
    
    
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

