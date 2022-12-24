<?php

namespace Plantae\Projeto\Controller;

use Plantae\Projeto\Core\Helpers\RenderHtml;

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