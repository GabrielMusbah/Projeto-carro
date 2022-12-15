<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class CarAdmin
{
    use RenderHtml;

    public function Edit(): void
    {
        $this->renderHtml(
            'Admin/EditList.tpl',
            ['title' => 'Admin', 'titleHeader' => ' - Carros', 'list' => $list]
        );
    }
}