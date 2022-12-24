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
            ['title' => 'Listar Carros', 'itens' => $cars]
        );
    }

    public function create(): void
    {
        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brands = $brand->load();

        $this->renderHtml(
            'Admin/CarCreate.tpl',
            ['title' => 'Criar Carro', 'marcas' => $brands]
        );
    }

    public function store():void
    {
        $connection = DataBase::createConnection();

        $carInfo = new CarModel($_POST);

        $car = new CarDao($connection);

        $car->store($carInfo);

        header('Location: /admin/carro');
    }

    public function edit(): void
    {

        $connection = DataBase::createConnection();  

        $brand = new BrandDao($connection);

        $brands = $brand->load();

        $this->renderHtml(
            'Admin/CarEdit.tpl',
            ['title' => 'Editar Carro', 'marcas' => $brands]
        );
    }
}