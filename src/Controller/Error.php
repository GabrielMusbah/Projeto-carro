<?php

namespace Plantae\Projeto\Controller;

use Plantae\Projeto\Core\Controller\Controller;

class Error  extends Controller
{

    public function index(): void
    {
        $this->renderHtml(
            'Error/404.tpl',[
                'title' => 'Erro 404'
            ]
        );
    }

}