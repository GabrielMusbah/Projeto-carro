<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Model\UserModel;

class Admin
{
    use RenderHtml;

    public function index(): void
    {
        $this->renderHtml(
            'Admin/Index.tpl',
            ['title' => 'Admin', 'titleNav' => '', 'logged' => true]
        );
    }
    
}