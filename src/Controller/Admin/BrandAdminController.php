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

        $brands = $brand->load();

        if(isset($_SESSION['msg'])){
            $list = ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true, 'msg' => ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']]];
        } else {
            $list = ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true];
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

        $userInfo = new BrandModel($_POST + ['marca_src' => $new_name]);

        $brand = new BrandDao();

        $brand->store($userInfo);

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

        $brand = new BrandDao();

        $brandInfo = new BrandModel(['marca_id' => $marca_id, 'marca_name' => $marca_name]);

        $brand->update($brandInfo);

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

        $brand->delete($marca_id);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Marca deletada com sucesso!';

        header('Location: /admin/marca');
    }
}