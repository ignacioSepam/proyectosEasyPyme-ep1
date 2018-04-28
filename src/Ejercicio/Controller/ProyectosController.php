<?php
namespace Ejercicio\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

use Ejercicio\Dao\ProyectoDao;
use Ejercicio\Entity\Proyecto;
use Ejercicio\Action\ProyectosAction;
// Routes

/*

$app->get('/proyecto',function(Request $request, Response $response){
    $data=$request->getParsedBody();
   
    //instanciamos entidad
    $proyectoAction = new ProyectosAction();
    $responseData = $proyectoAction->get();
   
    $response->withStatus(200);
    return $response->withJson($responseData);
    
});//añade middleware

$app->get('/proyecto/{id}',function(Request $request, Response $response,array $args){
    
    $id=$args['id'];
  
    //instanciamos proyectAction
     $proyectoAction = new ProyectosAction();
     
    //obtiene la entidad
    $responseData = $proyectoAction->get($id);
    
    $response->withStatus(200);
    return $response->withJson($responseData);
    
});//añade middleware
 
    
    $app->post('/proyecto/create',function( Request $request, Response $response){
        
         $data=$request->getParsedBody();
        
        //guardamos datos en la entity
         $entity = new Proyecto();
         $entity->setData($data);
         
         //instanciamos proyectos action
         $proyectoAction = new ProyectosAction();
         $responseData = $proyectoAction->insert($entity);
        
         
        $response->withStatus(200);
        return $response->withJson($responseData);
        
        
    
});//añade middleware

    $app->put('/proyecto/update/{id}', function (Request $request, Response $response,array $args)
    {
        
        //recoge los parametros
        $id=$args['id'];
        $data = $request->getParsedBody();
       
        //crea la instancia de la entidad
        $entity = new Proyecto();
        
        //establece propiedades
        $entity->setData($data);
        $entity->setId($id);
        
        //innstanciamos la entidad de proyectAction
         $proyectoAction = new ProyectosAction();
        
        //obtiene la entidad
        $responseData = $proyectoAction->update($entity);
        
        $response->withStatus(200);
        return $response->withJson($responseData);
        
        
    });//añade middleware
    $app->delete('/proyecto/delete/{id}', function (Request $request, Response $response,array $args)
    {
        //recoge los parametros
        $id=$args['id'];
        
        //isntanciamos proyecto action
         $proyectoAction = new ProyectosAction();
        
        //obtiene la entidad
        $responseData = $proyectoAction->delete($id);
       
       
        
       $response->withStatus(200); 
       return $response->withJson($responseData);
       
            
    });//añade middleware
   
    
    
    */
  
    
    
    
    
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

