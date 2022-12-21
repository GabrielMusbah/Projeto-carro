<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Helpers\RenderHtml;

class BrandAdmin
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
            'Admin/Brand.tpl',
            ['title' => 'Listar Marcas', 'itens' => $itens]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/BrandCreate.tpl',
            ['title' => 'Criar Marca']
        );
    }

    public function store():void
    {
        if(!isset($_FILES['pic']))
            return;

        if($_FILES['pic']['size'] > 2200000)
            return;


        $name = $_FILES['pic']['name'];

        $ext = pathinfo($name, PATHINFO_EXTENSION);

        $dir = './assets/guest/img/uploads/brand/';

        $new_name = $_POST['name-brand'] . '.' . $ext;

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name);

    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/BrandEdit.tpl',
            ['title' => 'Editar Marca']
        );
    }
}