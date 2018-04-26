<?php
namespace  oauth;


$dsn = 'mysql:host=localhost;dbname=oauthproyectos';
$userName= " ";
$password = "root";

//cargamos libreria y configuracion de STORAGE
$storage = new \OAuth2\Storage\Pdo(array(
   'dsn'=> $dsn,
    'userName'=>$userName,
    'password'=>$password
));

// config devuelva token

$config = array (
    //enforce_state obligatorio ponerlo a false, si no dará error
    'enforce_state' => false,
    'allow_implicit' => true, 
    //a modo de curiosiddad, despues del último valor puedees poner una coma o no.  
);

// instanciamos el servidor con todo lo configurado previamente

$server =new \OAuth2\Server($storage,$config);

// configuramos de Scope ( permisos usurio)

$defaultScope='scope1';
$supportedScopes= array (
    'scope1',
    'scope2',
    'scope3',
);

$scope = new \OAuth2\Scope(array(
    'default_scope'=>$defaultScope,
    'supportedScopes'=>$supportedScopes,
    
));

$server->setScopeUtil($scope);

//info autorización implicita para que nos devuelva token
$grantype = new OAuth2\GrantType\AuthorizationCode($storage);

$server->addGrantType($grantype);

$request= \OAuth2\Request::createFromGlobals();
$response = new \OAuth2\Response();

// funcion validateAuthorizaResquest
if(!$server->validateAuthorizeRequest($request,$response)){
    $response->send();
    die;
}


