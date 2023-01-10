<?php

namespace Plantae\Legendary\Controller\Guest;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\CreateCrudInterface;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\BrandModel;
use Plantae\Legendary\Model\BuyModel;
use Plantae\Legendary\Model\CarModel;

class CarController extends Controller implements ShowCrudInterface, CreateCrudInterface
{
    public function index(): void
    {
        $brands = (new BrandModel())->load(['marca_src'], ['marca_trash' => 'false']);

        $templateVars = ['title' => 'Index', 'imgs' => $brands];

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
    
                    $templateVars['cars'] = (new CarModel())->loadOrder(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca'], $value['order'], $value['filter']);
                    $templateVars['filter'] = $key;

                }
            }
        }

        if(!array_key_exists('filter', $templateVars)){

            $templateVars['cars'] = (new CarModel())->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca']);

            $templateVars['filter'] = 1;

        }

        $this->template->render('Guest/Index', $templateVars);
    }

    public function create(): void
    {
        $carroId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); 

        $carInfo = (new CarModel())->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id', 'top_speed', 'acceleration', 'braking', 'traction', 'description'], ['marca'], ['carro_id' => $carroId]);

        $templateVars = ['title' => $carInfo[0]['carro_name'], 'car' => $carInfo[0]];

        $this->template->render('Guest/Sale', $templateVars);
    }

    public function store(): void
    {
        $carroId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $carPrice = (new CarModel())->load(['price'], ['carro_id' => $carroId]);

        $buy = (new BuyModel($_POST + ['carro_id' => $carroId, 'usuario_id' => $_SESSION['user'], 'compra_price' => $carPrice[0]['price']]))->store();

        header('Location: /');
    }
}