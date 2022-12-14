<?php

require __DIR__ . '/../vendor/autoload.php';

$route = $_SERVER['PATH_INFO'];

$routes = require __DIR__ . '/../src/Routes/Web.php';

if(!array_key_exists($route, $routes)){
    http_response_code(404);
    exit();
}

/*
session_start();

$routesLogin = stripos($route, 'login'); //procura a palavra 'login' no $caminho, se nao tiver e false

if(!isset($_SESSION['logged']) && $routesLogin === false){
    header('Location: /login');
    exit();
}
*/

$classControll = $routes[$route];

$controll = new $classControll;

$controll->processRequest();

