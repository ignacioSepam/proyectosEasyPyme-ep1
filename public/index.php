<?php


if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

use \Slim\App as Slim;//reduce palabras para crear nueva instancia

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
//$app = new \Slim\App($settings);
$app = new Slim($settings);//nueva Instancia


// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

//añadimos middleware
$app->add($mwEntrada)->add($mwSalida);


//app llama a middlewareEntrada, mwE-> llama a la route, ->mwS

// Run app
$app->run();


