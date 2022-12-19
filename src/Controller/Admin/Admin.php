<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Helpers\RenderHtml;

class Admin
{
    use RenderHtml;

    public function index(): void
    {
        $this->renderHtml(
            'Admin/Index.tpl',
            ['title' => 'Admin']
        );
    }
}