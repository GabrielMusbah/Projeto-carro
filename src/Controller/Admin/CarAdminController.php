<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\CreateCrudInterface;
use Plantae\Projeto\Core\Interfaces\DeleteCrudInterface;
use Plantae\Projeto\Core\Interfaces\EditCrudInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\BrandModel;
use Plantae\Projeto\Model\CarModel;

class CarAdminController extends Controller  implements ShowCrudInterface, CreateCrudInterface, EditCrudInterface, DeleteCrudInterface
{
    public function index(): void
    {  
        $car = new CarModel();

        $cars = $car->loadJoin(['carro_trash', 'carro_id', 'carro_name', 'price', 'marca_name'], ['marca'], ['carro_trash' => 'false']);

        $arrayVars = ['title' => 'Listar Carros', 'itens' => $cars, 'titleNav' => '- Carros', 'logged' => true];

        if(isset($_SESSION['msg'])){
            $arrayVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];
        }

        $this->template->render('Admin/Car', $arrayVars);

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
    }

    public function create(): void
    {  
        $brand = new BrandModel();

        $brands = $brand->load(['marca_id', 'marca_trash', 'marca_name']);

        $arrayVars = ['title' => 'Criar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'logged' => true];

        $this->template->render('Admin/CarCreate', $arrayVars);
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

        $newName = $_POST['carro_name'] . '.' . $ext;

        move_uploaded_file($_FILES['picCar']['tmp_name'], $dir.$newName);

        $car = new CarModel($_POST + ['carro_src' => $newName]);

        $car->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Carro criado com sucesso!';

        header('Location: /admin/carro');
    }

    public function edit(): void
    {
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $car = new CarModel();

        $carBy = $car->load(['carro_name', 'carro_id', 'price', 'top_speed', 'acceleration', 'braking', 'traction', 'description', 'seat', 'marca_id', 'carro_src'],['carro_id'=> $carroId]);

        $brand = new BrandModel();

        $brands = $brand->load(['marca_id', 'marca_trash', 'marca_name']);

        $arrayVars = ['title' => 'Editar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'carro' => $carBy[0], 'logged' => true];

        $this->template->render('Admin/CarEdit', $arrayVars);
    }

    public function update(): void
    {
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );    

        if($_FILES['picCar']['size'] !== 0){

            if($_FILES['picCar']['size'] > 2200000)
                return;

            $car = new CarModel();

            $carSrc = $car->load(['carro_src'], ['carro_id' => $carroId])[0]['carro_src'];    

            $dir = CarModel::PATH;

            unlink($dir.$carSrc);

            $imageName = $_FILES['picCar']['name'];

            $ext = pathinfo($imageName, PATHINFO_EXTENSION);

            $newName = $_POST['carro_name'] . '.' . $ext;

            move_uploaded_file($_FILES['picCar']['tmp_name'], $dir.$newName);

            $carM = new CarModel($_POST + ['carro_src' => $newName, 'carro_id' => $carroId]);

            $carM->update(['carro_id' => $carroId]);

        } else {

            $car = new CarModel();

            $carSrc = $car->load(['carro_src'], ['carro_id' => $carroId])[0]['carro_src'];

            $carM = new CarModel($_POST + ['carro_id' => $carroId, 'carro_src' => $carSrc]);

            $carM->update(['carro_id' => $carroId]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Carro editado com sucesso!';

        header('Location: /admin/carro');
    }

    public function delete(): void
    {
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $car = new CarModel();

        $car->delete($carroId);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Carro deletada com sucesso!';

        header('Location: /admin/carro');
    }
}
