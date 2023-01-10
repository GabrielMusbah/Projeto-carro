<?php

namespace Plantae\Legendary\Controller\Admin;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\CreateCrudInterface;
use Plantae\Legendary\Core\Interfaces\DeleteCrudInterface;
use Plantae\Legendary\Core\Interfaces\EditCrudInterface;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\BrandModel;
use Plantae\Legendary\Model\CarModel;

class CarAdminController extends Controller  implements ShowCrudInterface, CreateCrudInterface, EditCrudInterface, DeleteCrudInterface
{
    public function index(): void
    {  
        $cars = (new CarModel())->loadJoin(['carro_trash', 'carro_id', 'carro_name', 'price', 'marca_name'], ['marca'], ['carro_trash' => 'false']);

        $templateVars = ['title' => 'Listar Carros', 'itens' => $cars, 'titleNav' => '- Carros', 'logged' => true];

        if(isset($_SESSION['msg'])){
            $templateVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];

            unset($_SESSION['msg']);
            unset($_SESSION['color']);
            unset($_SESSION['text']);
        }

        $this->template->render('Admin/Car', $templateVars);
    }

    public function create(): void
    {  
        $brands = (new BrandModel())->load(['marca_id', 'marca_trash', 'marca_name']);

        $templateVars = ['title' => 'Criar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'logged' => true];

        $this->template->render('Admin/CarCreate', $templateVars);
    }

    public function store():void
    {
        if(!isset($_FILES['picCar']))
            return;


        if($_FILES['picCar']['size'] > 2200000)
            return;
        

        $imageName = $_FILES['picCar']['name'];

        $ext = pathinfo($imageName, PATHINFO_EXTENSION);

        $dir = CarModel::PATH;

        $newName = "{$_POST['carro_name']}.{$ext}";

        move_uploaded_file($_FILES['picCar']['tmp_name'], "{$dir}{$newName}");

        $attrsCar = $_POST + ['carro_src' => $newName];

        $car = (new CarModel($attrsCar))->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Carro criado com sucesso!';

        header('Location: /admin/carro');
    }

    public function edit(): void
    {
        $carroId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  
        $carBy = (new CarModel())->load(['carro_name', 'carro_id', 'price', 'top_speed', 'acceleration', 'braking', 'traction', 'description', 'seat', 'marca_id', 'carro_src'],['carro_id'=> $carroId]);

        $brands = (new BrandModel())->load(['marca_id', 'marca_trash', 'marca_name']);

        $templateVars = ['title' => 'Editar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'carro' => $carBy[0], 'logged' => true];

        $this->template->render('Admin/CarEdit', $templateVars);
    }

    public function update(): void
    {
        $carroId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);    

        if($_FILES['picCar']['size'] !== 0){

            if($_FILES['picCar']['size'] > 2200000)
                return;


            $carSrc = (new CarModel())->load(['carro_src'], ['carro_id' => $carroId])[0]['carro_src'];    

            $dir = CarModel::PATH;

            unlink("{$dir}{$carSrc}");

            $imageName = $_FILES['picCar']['name'];

            $ext = pathinfo($imageName, PATHINFO_EXTENSION);

            $newName = "{$_POST['carro_name']}.{$ext}";

            move_uploaded_file($_FILES['picCar']['tmp_name'], "{$dir}{$newName}");

            $attrsCar = $_POST + ['carro_src' => $newName, 'carro_id' => $carroId];

            $carM = (new CarModel($attrsCar))->update(['carro_id' => $carroId]);

        } else {

            $carSrc = (new CarModel())->load(['carro_src'], ['carro_id' => $carroId])[0]['carro_src'];

            $attrsCar = $_POST + ['carro_id' => $carroId, 'carro_src' => $carSrc];

            $carM = (new CarModel($attrsCar))->update(['carro_id' => $carroId]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Carro editado com sucesso!';

        header('Location: /admin/carro');
    }

    public function delete(): void
    {
        $carroId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  
        $car = (new CarModel())->delete($carroId);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Carro deletada com sucesso!';

        header('Location: /admin/carro');
    }
}
