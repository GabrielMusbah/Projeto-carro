<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;

class AdminController extends Controller
{

    public function index(): void
    {
        $this->renderHtml(
            'Admin/Index.tpl',
            ['title' => 'Admin', 'titleNav' => '', 'logged' => true]
        );
    }
    
}