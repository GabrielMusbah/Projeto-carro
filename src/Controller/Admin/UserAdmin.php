<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Helpers\RenderHtml;

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
            ['title' => 'Listar Usuarios', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/UserCreate.tpl',
            ['title' => 'Criar Usuario']
        );
    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/UserEdit.tpl',
            ['title' => 'Editar Usuario']
        );
    }
}