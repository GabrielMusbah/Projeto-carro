<?php

namespace Plantae\Projeto\Controller;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class Error
{
    use RenderHtml;

    public function index(): void
    {
        $this->renderHtml(
            'Error/404.tpl',[
                'title' => 'Erro 404'
            ]
        );
    }

}