<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Helpers\RenderHtml;

class CarAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $itens = [
            ['name' => 'Uno'],
            ['name' => 'Chevete'],
            ['name' => 'HB 20']
        ];

        $this->renderHtml(
            'Admin/Car.tpl',
            ['title' => 'Listar Carros', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/CarCreate.tpl',
            ['title' => 'Criar Carro']
        );
    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/CarEdit.tpl',
            ['title' => 'Editar Carro']
        );
    }
}