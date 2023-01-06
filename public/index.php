<?php

require __DIR__ . '/../vendor/autoload.php';
$routes = require __DIR__ . '/../src/Routes/Web.php';


use Plantae\Projeto\Controller\Error\Error;
use Plantae\Projeto\Routes\Config;


//inicio das sessions
session_start();


//setando como route a roda passada no link /<PATH_INFO>
$route = $_SERVER['PATH_INFO'] ?? '/';


//rota de erro de pagina nao encontrada
if(!array_key_exists($route, $routes)){
    $error = new Error;
    $error->index();
    exit();
}


//controle das rotas adm/guest com login

$configRoute = new Config($route);

$r = $configRoute->route();

if(!($r === null)){
    header($r);
}


//sistema de controle entre as rotas e os controllers

[$classControll, $function] = $routes[$route];

$controll = new $classControll;

$controll->$function();

