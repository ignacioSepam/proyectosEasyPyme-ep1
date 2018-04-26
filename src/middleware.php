<?php


//acceso 
/*$mw = __DIR__.'/middleware/';

require $mw . 'Middleware.php' ;
*/

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


/*
$mw1 = (function (Request $request, Response $response, callable $next) {
   //die('dentro de mw');
    die('3-1');
   
    /*
    $request->withAttribute('foo', 'bar');
    $response = $next($request, $response);//llamada de los controladores
    $response->withStatus(200)->getBody()->write('AFTER');
    
    
    return $response;
});
*/
$mwEntrada = (function (Request $request, Response $response, callable $next){
    
    //if($app->$request);
    
    
   
    echo 'entrada';
    
   
    $dispatch = $next($request, $response);
    return $dispatch;
});



$mwSalida = (function (Request $request, Response $response, callable $next){
   
    $request->withAttribute('foo', 'bar');
    $response = $next($request, $response);//llamada de los controladores
   
    
    echo 'salida';
    return $response;
    
    
    /*
    $dispatch = $next($request, $response);
    return $dispatch;
     * 
     */
});

/**
 * mwEntrada y mwSalida son llamados en en public/index
 * $app->mwEntrada->mwSalida
 * 
 * la salida es mwEntrada,Route,mwSalida
 */