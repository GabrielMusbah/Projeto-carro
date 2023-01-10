<?php

namespace Plantae\Legendary\Routes;

class Config
{
    private $route;

    public function __construct(string $route)
    {
        $this->route = $route;
    }

    public function route()
    {
        $logged = isset($_SESSION['logged']);
        $AdminLogged = isset($_SESSION['adminLogged']);

        $routeAdmin = strpos($this->route, 'admin');
        $routeGuest = !strpos($this->route, 'admin');

        $routeLoginAdm = ['/admin/login', '/admin/logar'];
        $routeLogin = ['/login', '/logar', '/cadastro', '/cadastrar'];

        if($routeAdmin && !in_array($this->route, $routeLoginAdm) && !$AdminLogged){
            return 'Location: /admin/login';
        }

        if($routeGuest && !in_array($this->route, $routeLogin) && !$AdminLogged && !$logged){
            return 'Location: /login';
        }

        if($routeAdmin && in_array($this->route, $routeLoginAdm) && $AdminLogged){
            return 'Location: /admin';
        }

        if($routeGuest && in_array($this->route, $routeLogin) && ($AdminLogged || $logged)){
            return 'Location: /';
        }
    }
}