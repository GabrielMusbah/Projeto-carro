<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\BrandDao;
use Plantae\Projeto\Model\BrandModel;

class BrandAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brands = $brand->load();

        $this->renderHtml(
            'Admin/Brand.tpl',
            ['title' => 'Listar Marcas', 'itens' => $brands]
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

        $dir = BrandModel::PATH;

        $new_name = $_POST['name'] . '.' . $ext;

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name);

        $connection = DataBase::createConnection();  

        $userInfo = new BrandModel($_POST + ['src' => $new_name]);

        $brand = new BrandDao($connection);

        $brand->store($userInfo);

        header('Location: /admin/marca');

    }

    public function edit(): void
    {
        $this->renderHtml(
            'Admin/BrandEdit.tpl',
            ['title' => 'Editar Marca']
        );
    }
}