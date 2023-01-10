<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;

class AdminController extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $arrayVars = ['title' => 'Admin', 'titleNav' => '', 'logged' => true];

        $this->template->render('Admin/Index', $arrayVars);
    }
}