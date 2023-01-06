<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Model\BrandModel;
use Plantae\Projeto\Model\CarModel;

class CarAdminController extends Controller
{

    public function index(): void
    {  
        $car = new CarModel();

        $cars = $car->loadJoin(['carro_trash', 'carro_id', 'carro_name', 'price', 'marca_name'], ['marca'], ['carro_trash' => 'false']);

        if(isset($_SESSION['msg'])){
            $list = ['title' => 'Listar Carros', 'itens' => $cars, 'titleNav' => '- Carros', 'logged' => true, 'msg' => ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']]];
        } else {
            $list = ['title' => 'Listar Carros', 'itens' => $cars, 'titleNav' => '- Carros', 'logged' => true];
        }

        $this->renderHtml(
            'Admin/Car.tpl',
            $list
        );

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
    }

    public function create(): void
    {  
        $brand = new BrandModel();

        $brands = $brand->load(['marca_id', 'marca_trash', 'marca_name']);

        $this->renderHtml(
            'Admin/CarCreate.tpl',
            ['title' => 'Criar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'logged' => true]
        );
    }

    public function store():void
    {
        
        if(!isset($_FILES['picCar']))
            return;


        if($_FILES['picCar']['size'] > 2200000)
            return;
        

        $name = $_FILES['picCar']['name'];

        $ext = pathinfo($name, PATHINFO_EXTENSION);

        $dir = CarModel::PATH;

        $new_name = $_POST['carro_name'] . '.' . $ext;

        move_uploaded_file($_FILES['picCar']['tmp_name'], $dir.$new_name);

        $car = new CarModel($_POST + ['carro_src' => $new_name]);

        $car->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Carro criado com sucesso!';

        header('Location: /admin/carro');
    }

    public function edit(): void
    {

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $car = new CarModel();

        $carBy = $car->load(['carro_name', 'carro_id', 'price', 'top_speed', 'acceleration', 'braking', 'traction', 'description', 'seat', 'marca_id', 'carro_src'],['carro_id'=> $id]);

        $brand = new BrandModel();

        $brands = $brand->load(['marca_id', 'marca_trash', 'marca_name']);

        $this->renderHtml(
            'Admin/CarEdit.tpl',
            ['title' => 'Editar Carro', 'marcas' => $brands, 'titleNav' => '- Carros', 'carro' => $carBy[0], 'logged' => true]
        );
    }

    public function update(): void
    {
        $carro_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );    

        if($_FILES['picCar']['size'] !== 0){

            if($_FILES['picCar']['size'] > 2200000)
                return;

            $car = new CarModel();

            $carSrc = $car->load(['carro_src'], ['carro_id' => $carro_id])[0]['carro_src'];    

            $dir = CarModel::PATH;

            unlink($dir.$carSrc);

            $name = $_FILES['picCar']['name'];

            $ext = pathinfo($name, PATHINFO_EXTENSION);

            $new_name = $_POST['carro_name'] . '.' . $ext;

            move_uploaded_file($_FILES['picCar']['tmp_name'], $dir.$new_name);

            $carM = new CarModel($_POST + ['carro_src' => $new_name, 'carro_id' => $carro_id]);

            $carM->update(['carro_id' => $carro_id]);

        } else {

            $car = new CarModel();

            $carSrc = $car->load(['carro_src'], ['carro_id' => $carro_id])[0]['carro_src'];

            $carM = new CarModel($_POST + ['carro_id' => $carro_id, 'carro_src' => $carSrc]);

            $carM->update(['carro_id' => $carro_id]);
            
        }

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Carro editado com sucesso!';

        header('Location: /admin/carro');
    }

    public function delete(): void
    {
        $carro_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $car = new CarModel();

        $car->delete($carro_id);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Carro deletada com sucesso!';

        header('Location: /admin/carro');
    }
}
