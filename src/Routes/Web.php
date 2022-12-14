<?php

use Plantae\Projeto\Controller\Guest\ {
    FormularioLogin,
    FormularioCadastro
};

return [
    '/login' => FormularioLogin::class,
    '/cadastro' => FormularioCadastro::class,
];