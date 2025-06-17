<?php

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addBodyParsingMiddleware();	

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('¡Hola desde GET!');
    return $response;
});


$app->post('/', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $response->getBody()->write(json_encode($data));
    return $response;
});

$app->addErrorMiddleware(true, true, true);
$app->setBasePath("/API/public");
$app->run();