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
    '/login' => [User::class, 'loginForm'],
    '/cadastro' => [User::class, 'cadastreForm'],
    '/index' => [Car::class, 'carList'],
    '/compra' => [Car::class, 'carSale'],

    '/admin' => [Admin::class, 'showIndex'],
];