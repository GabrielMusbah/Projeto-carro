<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class Admin
{
    use RenderHtml;

    public function showIndex(): void
    {
        $this->renderHtml(
            'Admin/index.tpl',
            ['title' => 'Admin']
        );
    }
}