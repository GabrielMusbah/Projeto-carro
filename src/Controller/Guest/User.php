<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class User
{
    use RenderHtml;

    public function loginForm(): void
    {
        $this->renderHtml(
            'Guest/Login.tpl',
            ['title' => 'Login']
        );
    }

    public function cadastreForm(): void
    {
        $this->renderHtml(
            'Guest/Cadastre.tpl',
            ['title' => 'Cadastro']
        );
    }

}
