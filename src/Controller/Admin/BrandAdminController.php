<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\BrandDao;
use Plantae\Projeto\Model\BrandModel;

class BrandAdminController extends Controller
{

    public function index(): void
    {
        $brand = new BrandDao();

        $brands = $brand->load('marca', ['marca_id', 'marca_trash', 'marca_name']);

        $list = ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true];

        if(isset($_SESSION['msg'])){
            $list['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];
        }

        $this->renderHtml(
            'Admin/Brand.tpl',
            $list
        );

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
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

        $brand = new BrandDao();

        $brand->store(new BrandModel($_POST + ['marca_src' => $new_name]));

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Marca criada com sucesso!';

        header('Location: /admin/marca');

    }

    public function edit(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );  

        $brand = new BrandDao();

        $brandBy = $brand->load('marca', ['marca_id', 'marca_trash', 'marca_name'], ['marca_id' => $id]);

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
        
        $carro_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );    

        if($_FILES['picBrand']['size'] !== 0){

            if($_FILES['picBrand']['size'] > 2200000)
                return;

            $brand = new BrandDao();

            $brandSrc = $brand->load('marca', ['marca_src'], ['marca_id' => $marca_id])[0]['marca_src'];    

            dd($brandSrc);

            $dir = BrandModel::PATH;

            unlink($dir.$brandSrc);

            $name = $_FILES['picBrand']['name'];

            $ext = pathinfo($name, PATHINFO_EXTENSION);

            $new_name = $_POST['marca_name'] . '.' . $ext;

            move_uploaded_file($_FILES['picBrand']['tmp_name'], $dir.$new_name);

            $brand->update(new BrandModel($_POST + ['marca_src' => $new_name, 'carro_id' => $carro_id, 'marca_id' => $marca_id]), ['marca_id' => $marca_id]);

        } else {

            $brand = new BrandDao();

            $brandSrc = $brand->load('marca', ['marca_src'], ['marca_id' => $marca_id])[0]['marca_src']; 

            $brand->update(new BrandModel($_POST + ['marca_id' => $marca_id, 'marca_src' => $brandSrc]), ['marca_id' => $marca_id]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Marca editada com sucesso!';

        header('Location: /admin/marca');
        
    }

    public function delete(): void
    {
        $marca_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );  

        $brand = new BrandDao();

        $brand->delete('marca', $marca_id);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Marca deletada com sucesso!';

        header('Location: /admin/marca');
    }
}