<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\BrandDao;
use Plantae\Projeto\Model\BrandModel;

class BrandAdmin// extends Controller
{
    use RenderHtml;

    protected $connection;

    public function index(): void
    {
        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brands = $brand->load();

        $this->renderHtml(
            'Admin/Brand.tpl',
            ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/BrandCreate.tpl',
            ['title' => 'Criar Marca', 'titleNav' => '- Marcas', 'logged' => true]
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

        $new_name = $_POST['marca_name'] . '.' . $ext;

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name);

        $connection = DataBase::createConnection();  

        $userInfo = new BrandModel($_POST + ['marca_src' => $new_name]);

        $brand = new BrandDao($connection);

        $brand->store($userInfo);

        header('Location: /admin/marca');

    }

    public function edit(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brandBy = $brand->loadById($id);

        $this->renderHtml(
            'Admin/BrandEdit.tpl',
            ['title' => 'Editar Marca', 'titleNav' => '- Marcas', 'marca' => $brandBy[0], 'logged' => true]
        );
    }

    public function update(): void
    {
        $marca_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $marca_name = filter_input(
            INPUT_POST,
            'marca_name',
            FILTER_DEFAULT
        );

        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brandInfo = new BrandModel(['marca_id' => $marca_id, 'marca_name' => $marca_name]);

        $brand->update($brandInfo);
        
    }
}