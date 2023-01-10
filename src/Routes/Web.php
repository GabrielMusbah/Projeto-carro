<?php

use Plantae\Legendary\Controller\Guest\ {
    UserController,
    CarController,
    LoginController
};

use Plantae\Legendary\Controller\Admin\ {
    AdminController,
    CarAdminController,
    BrandAdminController,
    UserAdminController,
    BuyController,
    LoginAdminController,
    RecordController
};

return [
    //Rotas GET -> Index


    //Index do Guest
    '/' => [CarController::class, 'index'],

    //Index do Admin
    '/admin' => [AdminController::class, 'index'],


    //Rotas do Guest


    //Rotas GET
    '/login' => [LoginController::class, 'index'],
    '/cadastro' => [UserController::class, 'create'],
    '/compra' => [CarController::class, 'create'],

    //Rotas POST
    '/logar' => [LoginController::class, 'login'],
    '/cadastrar' => [UserController::class, 'store'],
    '/comprar' => [CarController::class, 'store'],


    //Rotas do Admin


    //Rotas GET -> Login
    '/admin/login' => [LoginAdminController::class, 'index'],

    //Rotas POST -> Login
    '/admin/logar' => [LoginAdminController::class, 'login'],
    '/admin/deslogar' => [LoginAdminController::class, 'logout'],


    //Rotas GET -> Usuario
    '/admin/usuario' => [UserAdminController::class, 'index'],
    '/admin/usuario/cria' => [UserAdminController::class, 'create'],
    '/admin/usuario/edita' => [UserAdminController::class, 'edit'],

    //Rotas POST -> Usuario
    '/admin/usuario/cadastrar' => [UserAdminController::class, 'store'],
    '/admin/usuario/editar' => [UserAdminController::class, 'update'],
    '/admin/usuario/deletar' => [UserAdminController::class, 'delete'],


    //Rotas GET -> Carro
    '/admin/carro' => [CarAdminController::class, 'index'],
    '/admin/carro/cria' => [CarAdminController::class, 'create'],
    '/admin/carro/edita' => [CarAdminController::class, 'edit'],

    //Rotas POST -> Carro
    '/admin/carro/criar' => [CarAdminController::class, 'store'],
    '/admin/carro/editar' => [CarAdminController::class, 'update'],
    '/admin/carro/deletar' => [CarAdminController::class, 'delete'],


    //Rotas GET -> Marca
    '/admin/marca' => [BrandAdminController::class, 'index'],
    '/admin/marca/cria' => [BrandAdminController::class, 'create'],
    '/admin/marca/edita' => [BrandAdminController::class, 'edit'],

    //Rotas POST -> Marca
    '/admin/marca/criar' => [BrandAdminController::class, 'store'],
    '/admin/marca/editar' => [BrandAdminController::class, 'update'],
    '/admin/marca/deletar' => [BrandAdminController::class, 'delete'],


    //rotas GET do Admin Compra
    '/admin/compra' => [BuyController::class, 'index'],
    '/admin/compra/edita' => [BuyController::class, 'edit'],

    //rota POST do Admin Compra
    '/admin/compra/editar' => [BuyController::class, 'update'],

    //Rota GET do Admin Relatorio
    '/admin/relatorio' => [RecordController::class, 'index'],
    '/admin/relatorio/filtrado' => [RecordController::class, 'indexFilter'],

];