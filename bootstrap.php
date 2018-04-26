<?php

require_once  "vendor/autoload.php";


//DOCTRINE
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(
    __DIR__."/src/" //aquí va a almacenar DOCTRINE las entidades
);
$isDevMode=false;
//la configuración de la conexion
$dbParams= array(
    'driver'=>'pdo_mysql',
    'dbname'=>'lproyectos',
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'',
   
);

$configDoctrine=Setup::createAnnotationMetadataConfiguration($paths,$isDevMode,null, null, false);
$entityManager=EntityManager::create($dbParams,$configDoctrine);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

