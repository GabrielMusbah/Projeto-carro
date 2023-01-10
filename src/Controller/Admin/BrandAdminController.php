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
        $brands = (new BrandModel())->load(['marca_id', 'marca_trash', 'marca_name'], ['marca_trash' => 'false']);

        $templateVars = ['title' => 'Listar Marcas', 'itens' => $brands, 'titleNav' => '- Marcas', 'logged' => true];

        if(isset($_SESSION['msg'])){
            $templateVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];

            unset($_SESSION['msg']);
            unset($_SESSION['color']);
            unset($_SESSION['text']);
        }

        $this->template->render('Admin/Brand', $templateVars);
    }

    public function create(): void
    {
        $templateVars = ['title' => 'Criar Marca', 'titleNav' => '- Marcas', 'logged' => true];

        $this->template->render('Admin/BrandCreate', $templateVars);
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

        $newName = "{$_POST['marca_name']}.{$ext}";

        move_uploaded_file($_FILES['pic']['tmp_name'], "{$dir}{$newName}");  

        $attrsBrand = $_POST + ['marca_src' => $newName];

        $brand = (new BrandModel($attrsBrand))->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Marca criada com sucesso!';

        header('Location: /admin/marca');

    }

    public function edit(): void
    {
        $marcaId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);  

        $brandById = (new BrandModel())->load(['marca_id', 'marca_trash', 'marca_name', 'marca_src'], ['marca_id' => $marcaId]);

        $templateVars = ['title' => 'Editar Marca', 'titleNav' => '- Marcas', 'marca' => $brandById[0], 'logged' => true];

        $this->template->render('Admin/BrandEdit', $templateVars);
    }

    public function update(): void
    {
        $marcaId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if($_FILES['picBrand']['size'] !== 0){

            if($_FILES['picBrand']['size'] > 2200000)
                return;


            $brandSrc = (new BrandModel())->load(['marca_src'], ['marca_id' => $marcaId])[0]['marca_src'];    

            $dir = BrandModel::PATH;

            unlink("{$dir}{$brandSrc}");

            $imageName = $_FILES['picBrand']['name'];

            $ext = pathinfo($imageName, PATHINFO_EXTENSION);

            $newName = "{$_POST['marca_name']}.{$ext}";

            move_uploaded_file($_FILES['picBrand']['tmp_name'], "{$dir}{$newName}");

            $attrsBrand = $_POST + ['marca_src' => $newName, 'marca_id' => $marcaId];

            $brandM = new BrandModel($attrsBrand);

            $brandM->update(['marca_id' => $marcaId]);

        } else {

            $brandSrc = (new BrandModel())->load(['marca_src'], ['marca_id' => $marcaId])[0]['marca_src'];   

            $attrsBrand = $_POST + ['marca_id' => $marcaId, 'marca_src' => $brandSrc];

            $brandM = (new BrandModel($attrsBrand))->update(['marca_id' => $marcaId]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Marca editada com sucesso!';

        header('Location: /admin/marca');
    }

    public function delete(): void
    {
        $marcaId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);  

        $brand = (new BrandModel())->delete($marcaId);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Marca deletada com sucesso!';

        header('Location: /admin/marca');
    }
}