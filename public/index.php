<?php

require('/opt/lampp/htdocs/Projeto-carro/public/Debug/vendor/autoload.php');



require __DIR__ . '/../vendor/autoload.php';

use Plantae\Projeto\Controller\Helpers\RenderHtml;

use Plantae\Projeto\Controller\Error;

$route = $_SERVER['PATH_INFO'] ?? '/';

$routes = require __DIR__ . '/../src/Routes/Web.php';

if(!array_key_exists($route, $routes)){
    $error = new Error;
    $error->index();
    exit();
}



session_start();

$listAll = ['/login', '/logar', '/cadastro', '/cadastrar', '/admin/login', '/admin/logar'];

$listGet = ['/login', '/cadastro', '/admin/login'];

//Se a pessoa quem entrar em algo na parte Admin e não esta logado como adm, ele é mandado pro login adm
if(strpos($route, 'admin') && !(strpos($route, 'login') || strpos($route, 'logar')) && !isset($_SESSION['adminLogged'])){
    header('Location: /admin/login');
    exit();
}

//se a pessoa tentar entrar em algum lugar e não esta logado ele é mandado pro /login
if(!in_array($route, $listAll) && !isset($_SESSION['logged']) && !isset($_SESSION['adminLogged'])){
    header('Location: /login');
    exit();
}

if(in_array($route, $listGet) && isset($_SESSION['adminLogged'])){
    header('Location: /admin');
    exit();
}

if(in_array($route, $listGet) && isset($_SESSION['logged'])){
    header('Location: /');
    exit();
}


[$classControll, $function] = $routes[$route];

$controll = new $classControll;

$controll->$function();

