<?php

namespace Plantae\Legendary\Controller\Admin;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;

class AdminController extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $templateVars = ['title' => 'Admin', 'titleNav' => '', 'logged' => true];

        $this->template->render('Admin/Index', $templateVars);
    }
}