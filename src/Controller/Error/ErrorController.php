<?php

namespace Plantae\Projeto\Controller\Error;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;

class ErrorController  extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $templateVars = ['title' => 'Erro 404'];

        $this->template->render('Error/404', $templateVars);
    }
}