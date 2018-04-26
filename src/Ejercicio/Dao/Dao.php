<?php

namespace Ejercicio\Dao;

//con este archivo podemos crear las rutas para crear entidades que generará los objetos

//son los nombres de espacio que esta clase necesitará para funcionar
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

abstract class Dao{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    
    //crea el atriburo entiti manger que almacenará información
    private $entityManager=null;
    
    /*
     * @return \Doctrine\ORM\EntityManager
     */
    
    //Si la entidad está nula, nos genera una nueva entidad
    //Nos devolverá la entidad y si el atributo es nulo, nos creará una nueva entidad
    public function getEntityManager(){
        if($this->entityManager === null){
            $this->entityManager = $this->createEntityManager();
            
        }
        return $this->entityManager;
    }
    /**
     * @return EntityManager 
     */
    
    //crea una nueva entidad
    public function createEntityManager(){
        //le va a decir donde leer, _DIR_ indica que apunte al derectio SRC
        $paths = array(
            __DIR__."/src/" //aquí va a almacenar DOCTRINE las entidades
        );
        $isDevMode = false;
        
        //la configuración de la conexion de la base de datos
        $dbParams = array(
            'driver'=>'pdo_mysql',
            'dbname'=>'lproyectos',
            'host'=>'localhost',
            'user'=>'root',
            'password'=>'',

        );
        
        //es una linea donde almacena algunos archivos de configuracion nos dice donde vamos a coger las entidades-paths
        $configDoctrine = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode,null, null, false);
        
        //nos devuelve el objeto creado de la enty manager
        $entityManager = EntityManager::create($dbParams,$configDoctrine);
        
        return $entityManager;
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

