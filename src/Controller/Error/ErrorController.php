<?php

namespace Plantae\Legendary\Controller\Error;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;

class ErrorController  extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $templateVars = ['title' => 'Erro 404'];

        $this->template->render('Error/404', $templateVars);
    }
}