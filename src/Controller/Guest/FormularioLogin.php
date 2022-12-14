<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class FormularioLogin
{
    use RenderHtml;

    public function processRequest(): void
    {
        $this->renderHtml(
            'Login.tpl',
            ['title' => 'Legendary Motor Sport']
        );
    }
}