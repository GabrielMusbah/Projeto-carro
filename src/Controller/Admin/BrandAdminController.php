<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\CreateCrudInterface;
use Plantae\Projeto\Core\Interfaces\DeleteCrudInterface;
use Plantae\Projeto\Core\Interfaces\EditCrudInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\BrandModel;

class BrandAdminController extends Controller  implements ShowCrudInterface, CreateCrudInterface, EditCrudInterface, DeleteCrudInterface
{
    public function index(): void
    {
        $brand = new BrandModel();

        $brands = $brand->load(['marca_id', 'marca_trash', 'marca_name'], ['marca_trash' => 'false']);

        $arrayVars = ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true];

        if(isset($_SESSION['msg'])){
            $arrayVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];
        }

        $this->template->render('Admin/Brand', $arrayVars);

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
    }

    public function create(): void
    {
        $arrayVars = ['title' => 'Criar Marca', 'titleNav' => '- Marcas', 'logged' => true];

        $this->template->render('Admin/BrandCreate', $arrayVars);
    }

    public function store():void
    {
        if(!isset($_FILES['pic']))
            return;

        if($_FILES['pic']['size'] > 2200000)
            return;


        $imageName = $_FILES['pic']['name'];

        $ext = pathinfo($imageName, PATHINFO_EXTENSION);

        $dir = BrandModel::PATH;

        $newName = $_POST['marca_name'] . '.' . $ext;

        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$newName);  

        $brand = new BrandModel($_POST + ['marca_src' => $newName]);

        $brand->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Marca criada com sucesso!';

        header('Location: /admin/marca');

    }

    public function edit(): void
    {
        $marcaId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );  

        $brand = new BrandModel();

        $brandById = $brand->load(['marca_id', 'marca_trash', 'marca_name', 'marca_src'], ['marca_id' => $marcaId]);

        $arrayVars = ['title' => 'Editar Marca', 'titleNav' => '- Marcas', 'marca' => $brandById[0], 'logged' => true];

        $this->template->render('Admin/BrandEdit', $arrayVars);
    }

    public function update(): void
    {
        $marcaId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
        
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );    

        if($_FILES['picBrand']['size'] !== 0){

            if($_FILES['picBrand']['size'] > 2200000)
                return;

            $brand = new BrandModel();

            $brandSrc = $brand->load(['marca_src'], ['marca_id' => $marcaId])[0]['marca_src'];    

            $dir = BrandModel::PATH;

            unlink($dir.$brandSrc);

            $imageName = $_FILES['picBrand']['name'];

            $ext = pathinfo($imageName, PATHINFO_EXTENSION);

            $newName = $_POST['marca_name'] . '.' . $ext;

            move_uploaded_file($_FILES['picBrand']['tmp_name'], $dir.$newName);

            $brandM = new BrandModel($_POST + ['marca_src' => $newName, 'carro_id' => $carroId, 'marca_id' => $marcaId]);

            $brandM->update(['marca_id' => $marcaId]);

        } else {

            $brand = new BrandModel();

            $brandSrc = $brand->load(['marca_src'], ['marca_id' => $marcaId])[0]['marca_src'];   

            $brandM = new BrandModel($_POST + ['marca_id' => $marcaId, 'marca_src' => $brandSrc]);

            $brandM->update(['marca_id' => $marcaId]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Marca editada com sucesso!';

        header('Location: /admin/marca');
    }

    public function delete(): void
    {
        $marcaId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );  

        $brand = new BrandModel();

        $brand->delete($marcaId);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Marca deletada com sucesso!';

        header('Location: /admin/marca');
    }
}