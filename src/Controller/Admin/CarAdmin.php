<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

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
            ['title' => ' - Carro', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/CarCreate.tpl',
            ['title' => ' - Carro']
        );
    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/CarEdit.tpl',
            ['title' => ' - Carro']
        );
    }
}