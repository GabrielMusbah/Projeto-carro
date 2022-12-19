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
    Historic
};

return [
    //rota GET do Guest index
    '/' => [Car::class, 'index'],

    //rotas GET do Guest
    '/login' => [User::class, 'loginForm'],
    '/cadastro' => [User::class, 'cadastreForm'],
    '/compra' => [Car::class, 'carSale'],


    //rota GET do Admin index
    '/admin' => [Admin::class, 'index'],

    //rotas GET do Admin Carro
    '/admin/carro' => [CarAdmin::class, 'index'],
    '/admin/carro/cria' => [CarAdmin::class, 'create'],
    '/admin/carro/edita' => [CarAdmin::class, 'edit'],

    //rotas GET do Admin Usuario
    '/admin/usuario' => [UserAdmin::class, 'index'],
    '/admin/usuario/cria' => [UserAdmin::class, 'create'],
    '/admin/usuario/edita' => [UserAdmin::class, 'edit'],

    //rotas GET do Admin Marca
    '/admin/marca' => [BrandAdmin::class, 'index'],
    '/admin/marca/cria' => [BrandAdmin::class, 'create'],
    '/admin/marca/edita' => [BrandAdmin::class, 'edit'],

    //rotas GET do Admin Compra
    '/admin/historico' => [Historic::class, 'index'],


    //rotas POST do Admin Carro

    //rotas POST do Admin Usuario

    //rotas POST do Admin Marca
    '/admin/marca/criar' => [BrandAdmin::class, 'store'],
    '/admin/marca/editar' => [BrandAdmin::class, 'update'],


];