<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\CreateCrudInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\BrandModel;
use Plantae\Projeto\Model\BuyModel;
use Plantae\Projeto\Model\CarModel;

class CarController extends Controller implements ShowCrudInterface, CreateCrudInterface
{
    public function index(): void
    {
        $brand = new BrandModel();

        $brands = $brand->load(['marca_src'], ['marca_trash' => 'false']);

        $arrayVars = ['title' => 'Index', 'imgs' => $brands];

        $car = new CarModel();

        $listFIlter = [
            1 => [
                'order' => 'price',
                'filter' => 'ASC'
            ], 
            2 => [
                'order' => 'price',
                'filter' => 'DESC'
            ],
            3 => [
                'order' => 'carro_name',
                'filter' => 'ASC',
            ],
            4 => [
                'order' => 'carro_name',
                'filter' => 'DESC',
            ],
            5 => [
                'order' => 'seat',
                'filter' => 'ASC',
            ],
            6 => [
                'order' => 'seat',
                'filter' => 'DESC',
            ],
            7 => [
                'order' => 'marca_name',
                'filter' => 'ASC',
            ],
            8 => [
                'order' => 'marca_name',
                'filter' => 'DESC',
            ]
        ];

        if(isset($_GET['filter'])){

            foreach($listFIlter as $key => $value){
                if($_GET['filter'] == $key){
    
                    $arrayVars['cars'] = $car->loadOrder(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca'], $value['order'], $value['filter']);
                    $arrayVars['filter'] = $key;

                }
            }
        }

        if(!array_key_exists('filter', $arrayVars)){

            $arrayVars['cars'] = $car->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca']);

            $arrayVars['filter'] = 1;

        }

        $this->template->render('Guest/Index', $arrayVars);
    }

    public function create(): void
    {
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        ); 

        $car = new CarModel();

        $carInfo = $car->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id', 'top_speed', 'acceleration', 'braking', 'traction', 'description'], ['marca'], ['carro_id' => $carroId]);

        $arrayVars = ['title' => $carInfo[0]['carro_name'], 'car' => $carInfo[0]];

        $this->template->render('Guest/Sale', $arrayVars);
    }

    public function store(): void
    {
        $carroId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $car = new CarModel();

        $carPrice = $car->load(['price'], ['carro_id' => $carroId]);

        $buy = new BuyModel($_POST + ['carro_id' => $carroId, 'usuario_id' => $_SESSION['user'], 'compra_price' => $carPrice[0]['price']]);

        $buy->store();

        header('Location: /');
    }
}