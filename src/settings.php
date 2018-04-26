<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'determineRouteBeforeAppMiddleware' => true, // permite añadir un middleware a cada ROUTEcontroller

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
    
    // No encontrado
    
    'notFoundHandler' => function ($c) {
        return function ($request, $response) use ($c) {
            return $c['response']
                ->withStatus(404)
                ->withHeader('Content-Type', 'text/html')
                ->write('Page not found');
        };
    },
            
    // controlador de errores
            
    'errorHandler' => function ($c) {
        return function ($request, $response, $exception) use ($c) {
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write($exception->getMessage());
        };
    },
];
