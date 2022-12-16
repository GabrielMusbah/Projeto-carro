<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class UserAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $itens = [
            ['name' => 'Jose'],
            ['name' => 'Carlinhos'],
            ['name' => 'Maia']
        ];

        $this->renderHtml(
            'Admin/User.tpl',
            ['title' => ' - Usuario', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/UserCreate.tpl',
            ['title' => ' - Usuario']
        );
    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/UserEdit.tpl',
            ['title' => ' - Usuario']
        );
    }
}