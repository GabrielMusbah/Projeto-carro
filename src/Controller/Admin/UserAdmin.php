<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class UserAdmin
{
    use RenderHtml;

    public function loginAdmin(): void
    {
        $this->renderHtml(
            'Sale.tpl',
            ['title' => $id, 'car' => $car]
        );
    }

    public function Edit(): void
    {
        $this->renderHtml(
            'Admin/EditList.tpl',
            ['title' => 'Admin', 'titleHeader' => ' - Carros', 'list' => $list]
        );
    }
}