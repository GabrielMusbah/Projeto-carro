<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\BrandDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Model\CarModel;

class CarAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $connection = DataBase::createConnection();  

        $car = new CarDao($connection);

        $cars = $car->load();

        $this->renderHtml(
            'Admin/Car.tpl',
            ['title' => 'Listar Carros', 'itens' => $cars, 'titleNav' => '- Carros', 'logged' => true]
        );
    }

    public function create(): void
    {
        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

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

        $connection = DataBase::createConnection();

        $carInfo = new CarModel($_POST + ['carro_src' => $new_name]);

        $car = new CarDao($connection);

        $car->store($carInfo);

        header('Location: /admin/carro');
    }

    public function edit(): void
    {

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $connection = DataBase::createConnection();  

        $car = new CarDao($connection);

        $carBy = $car->loadById($id);

        $brand = new BrandDao($connection);

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

        $connection = DataBase::createConnection();  

        $car = new CarDao($connection);

        $carInfo = new CarModel($_POST + ['carro_id' => $carro_id]);

        // dd($carInfo);

        $car->update($carInfo);

        header('Location: /admin/carro');
    }
}
