<?php
namespace Ejercicio\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use Ejercicio\Action\EmpleadoAction;
use Ejercicio\Entity\Empleado;





// Routes

//cuando pongas en el navegador localhost/proyectos/public/empleado,
//cuidado con los palitos pueden darte error

/*ESTO ES UNA PRUEBA******************************

$app->get('/', function ($request, $response, $args) {
    die('2');
    /*
    $response->getBody()->write(' Hello ');

	return $response;
      
     
});
***********************************************
*/

/*

$app->get('/empleado',function(Request $request, Response $response)
{
    //die('ASD');
    // Instancia el action
    $empleadoAction = new EmpleadoAction();
    
    // Obtiene la lista de entidades
    $responseData = $empleadoAction->get();
    
    echo ' -Route Empleado- ';
    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//->add($mw3);//salida del mindware



$app->get('/empleado/{id}',function(Request $request, Response $response,array $args)
{
    // Recoge los parametros
    $id = $args['id'];
    
    // Instancia el action
    $empleadoAction = new EmpleadoAction();
    
    // Obtiene la entidad
    $responseData = $empleadoAction->get($id);
    
    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//->add($mw);
 
    

$app->post('/empleado/create',function( Request $request, Response $response)
{
    //DATA pide a slim que mire el encabezado solicitud y los conet-type 
    //"para que luego en el BODY haga algo inteligente"
    $data = $request->getParsedBody();

    // Crea la instancia de la entidad y action
    $entity = new Empleado();
    $empleadoAction = new EmpleadoAction();

    // Establece las propiedades
    $entity->setData($data);
    
    // Crea la entidad
    $responseData = $empleadoAction->insert($entity);
    
    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//->add($mw);



$app->put('/empleado/update/{id}', function (Request $request, Response $response,array $args)
{
    // Recoge los parametros
    $id = $args['id'];
    $data = $request->getParsedBody();

    // Crea la instancia de la entidad y action
    $entity = new Empleado();
    $empleadoAction = new EmpleadoAction();
    
    // Establece las propiedades
    $entity->setData($data);
    $entity->setId($id);
    
    // Obtiene la entidad
    $responseData = $empleadoAction->update($entity);
    
    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//->add($mw);



$app->delete('/empleado/delete/{id}', function (Request $request, Response $response,array $args)
{
    // Recoge los parametros
    $id = $args['id'];
    
    //instanciamos la entidad de action
    $empleadoAction = new EmpleadoAction();
    
    // Obtiene la entidad
    $responseData = $empleadoAction->delete($id);
    
    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//->add($mw);
   
    
   */
    
  
    
    
    
    
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

