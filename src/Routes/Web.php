<?php

use Plantae\Projeto\Controller\Guest\ {
    User,
    Car
};

use Plantae\Projeto\Controller\Admin\ {
    Admin,
    CarAdmin,
    BrandAdmin,
    UserAdmin,
    Historic,
    Login
};

return [
    //Rotas GET -> Index


    //Index do Guest
    '/' => [Car::class, 'index'],

    //Index do Admin
    '/admin' => [Admin::class, 'index'],


    //Rotas do Guest


    //Rotas GET
    '/login' => [User::class, 'loginIndex'],
    '/cadastro' => [User::class, 'cadastreIndex'],
    '/compra' => [Car::class, 'carSale'],

    //Rotas POST
    '/logar' => [User::class, 'login'],
    '/cadastrar' => [User::class, 'create'],


    //Rotas do Admin


    //Rotas GET -> Login
    '/admin/login' => [Login::class, 'index'],

    //Rotas POST -> Login
    '/admin/logar' => [Login::class, 'login'],
    '/admin/deslogar' => [Login::class, 'logout'],


    //Rotas GET -> Usuario
    '/admin/usuario' => [UserAdmin::class, 'index'],
    '/admin/usuario/cria' => [UserAdmin::class, 'create'],
    '/admin/usuario/edita' => [UserAdmin::class, 'edit'],

    //Rotas POST -> Usuario
    '/admin/cadastrar' => [UserAdmin::class, 'store'],
    '/admin/usuario/editar' => [UserAdmin::class, 'update'],


    //Rotas GET -> Carro
    '/admin/carro' => [CarAdmin::class, 'index'],
    '/admin/carro/cria' => [CarAdmin::class, 'create'],
    '/admin/carro/edita' => [CarAdmin::class, 'edit'],

    //Rotas POST -> Carro
    '/admin/carro/criar' => [CarAdmin::class, 'store'],
    '/admin/carro/editar' => [CarAdmin::class, 'update'],


    //Rotas GET -> Marca
    '/admin/marca' => [BrandAdmin::class, 'index'],
    '/admin/marca/cria' => [BrandAdmin::class, 'create'],
    '/admin/marca/edita' => [BrandAdmin::class, 'edit'],

    //Rotas POST -> Marca
    '/admin/marca/criar' => [BrandAdmin::class, 'store'],
    '/admin/marca/editar' => [BrandAdmin::class, 'update'],


    //rotas GET do Admin Compra
    '/admin/historico' => [Historic::class, 'index'],

];