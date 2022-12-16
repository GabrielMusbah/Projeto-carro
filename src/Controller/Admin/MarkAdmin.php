<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Helpers\RenderHtml;

class MarkAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $itens = [
            ['name' => 'Fiat'],
            ['name' => 'Ford'],
            ['name' => 'Dodge']
        ];

        $this->renderHtml(
            'Admin/Mark.tpl',
            ['title' => ' - Marca', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/MarkCreate.tpl',
            ['title' => ' - Marca']
        );
    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/MarkEdit.tpl',
            ['title' => ' - Marca']
        );
    }
}