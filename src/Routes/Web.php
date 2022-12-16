<?php

use Plantae\Projeto\Controller\Guest\ {
    User,
    Car
};

use Plantae\Projeto\Controller\Admin\ {
    Admin,
    CarAdmin,
    MarkAdmin,
    UserAdmin
};

return [
    //rotas GET do Guest
    '/login' => [User::class, 'loginForm'],
    '/cadastro' => [User::class, 'cadastreForm'],
    '/' => [Car::class, 'index'],
    '/compra' => [Car::class, 'carSale'],

    //rotas GET do Admin index
    '/admin' => [Admin::class, 'index'],
    '/admin/carro' => [CarAdmin::class, 'index'],
    '/admin/usuario' => [UserAdmin::class, 'index'],
    '/admin/marca' => [MarkAdmin::class, 'index'],

    //rotas GET do Admin Criação
    '/admin/carro/cria' => [CarAdmin::class, 'create'],
    '/admin/usuario/cria' => [UserAdmin::class, 'create'],
    '/admin/marca/cria' => [MarkAdmin::class, 'create'],

    //rotas GET do Admin Edição
    '/admin/carro/edita' => [CarAdmin::class, 'edit'],
    '/admin/usuario/edita' => [UserAdmin::class, 'edit'],
    '/admin/marca/edita' => [MarkAdmin::class, 'edit'],
];