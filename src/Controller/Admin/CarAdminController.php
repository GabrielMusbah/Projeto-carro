<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\BrandDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Model\CarModel;

class CarAdminController extends Controller
{

    public function index(): void
    {  
        $car = new CarDao();

        $cars = $car->load();

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
        $brand = new BrandDao();

        $brands = $brand->load();

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

        $carInfo = new CarModel($_POST + ['carro_src' => $new_name]);

        $car = new CarDao();

        $car->store($carInfo);

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
  
        $car = new CarDao();

        $carBy = $car->loadById($id);

        $brand = new BrandDao();

        $brands = $brand->load();

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
  
        $car = new CarDao();

        $carInfo = new CarModel($_POST + ['carro_id' => $carro_id]);

        // dd($carInfo);

        $car->update($carInfo);

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
  
        $car = new CarDao();

        $car->delete($carro_id);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Carro deletada com sucesso!';

        header('Location: /admin/carro');
    }
}
