<?php

namespace action\controller;

use Slim\Http\Request;
use Slim\Http\Response;
use entity\Dao\RealizaDao;
use entity\Entity\Realiza;
use action\action\RealizaAction;

// Routes



$app->get('/realiza', function(Request $request, Response $response) {
    //instanciamos objeto
    $realizaAction = new RealizaAction();

    //obtiene la lista de entidades
    $responseData = $realizaAction->get();

    //establece codigo de respuesta
    $response->withStatus(200);

    //establece contenido de la respuesta
    return $response->withJson($responseData);
});//añade middleware

$app->get('/realiza/{id}', function(Request $request, Response $response, array $args) {
    // Recoge los parametros
    $id = $args['id'];

    //instanciamos objeto
    $realizaAction = new RealizaAction();

    // Obtiene la entidad
    $responseData = $realizaAction->get($id);

    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//añade middleware


$app->post('/realiza/create', function( Request $request, Response $response) {
    //DATA pide a slim que mire el encabezado solicitud y los conet-type 
    //"para que luego en el BODY haga algo inteligente"
    $data = $request->getParsedBody();

    // Crea la instancia de la entidad
    $entity = new Realiza();

    // Establece las propiedades
    $entity->setData($data);

    // Crea la entidad
    //instanciamos objeto
    $realizaAction = new RealizaAction();
    $responseData = $realizaAction->insert($entity);

    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//añade middleware

$app->put('/realiza/update/{id}', function (Request $request, Response $response, array $args) {


    // Recoge los parametros
    $id = $args['id'];
    $data = $request->getParsedBody();

    // Crea la instancia de la entidad
    $entity = new Realiza();

    // Establece las propiedades
    $entity->setData($data);
    $entity->setId($id);

    // Obtiene la entidad
    //instanciamos objeto
    $realizaAction = new RealizaAction();
    $responseData = $realizaAction->update($entity);

    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//añade middleware
$app->delete('/realiza/delete/{id}', function (Request $request, Response $response, array $args) {
    // Recoge los parametros
    $id = $args['id'];

    // Obtiene la entidad
    //instanciamos objeto
    $realizaAction = new RealizaAction();
    $responseData = $realizaAction->delete($id);

    // Establece el codigo de la respuesta
    $response->withStatus(200);
    // Establece el contenido de la respuesta
    return $response->withJson($responseData);
});//añade middleware











/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

