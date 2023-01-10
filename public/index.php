<?php

//usado pra debugar
require __DIR__ . '/Debug/vendor/autoload.php';

require __DIR__ . '/../vendor/autoload.php';
$routes = require __DIR__ . '/../src/Routes/Web.php';

use Plantae\Legendary\Config\DotenvConfig;
use Plantae\Legendary\Controller\Error\ErrorController;
use Plantae\Legendary\Routes\Config;

//setando globalmente o .env
$dotenv = new DotenvConfig();
$dotenv->load();

//inicio das sessions
session_start();

//setando como route a roda passada no link /<PATH_INFO>
$route = $_SERVER['PATH_INFO'] ?? '/';

//rota de erro de pagina nao encontrada
if(!array_key_exists($route, $routes)){
    $error = new ErrorController;
    $error->index();
    exit();
}

//controle das rotas adm/guest com login
$configRoute = new Config($route);

if(!($configRoute->route() === null)){
    header($configRoute->route());
}

//sistema de controle entre as rotas e os controllers
[$classControll, $function] = $routes[$route];

$controll = new $classControll;

$controll->$function();

