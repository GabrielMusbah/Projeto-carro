<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Dao\Orm;
use Plantae\Projeto\Dao\BuyDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Model\BuyModel;
use Plantae\Projeto\Model\CarModel;

class CarController extends Controller
{

    public function index(): void
    {
        $imgs = ['IconFerrari', 'IconLamborghini', 'IconMazda', 'IconBmw', 'IconMercedes', 'IconMaserati', 'IconJeep', 'IconVolvo', 'IconToyota'];

        $list = ['title' => 'Index', 'imgs' => $imgs];

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
    
                    $list['cars'] = $car->loadOrder(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca'], $value['order'], $value['filter']);
                    $list['filter'] = $key;

                }
            }
        }

        if(!array_key_exists('filter', $list)){

            $list['cars'] = $car->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id'], ['marca']);

            $list['filter'] = 1;

        }


        $this->renderHtml(
            'Guest/Index.tpl',
            $list
        );
    }

    public function create(): void
    {
        $carro_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        ); 

        $car = new CarModel();

        $carInfo = $car->loadJoin(['carro_name', 'marca_name', 'marca_src', 'seat', 'price', 'carro_src', 'carro_id', 'top_speed', 'acceleration', 'braking', 'traction', 'description'], ['marca'], ['carro_id' => $carro_id]);

        $this->renderHtml(
            'Guest/Sale.tpl',
            ['title' => $carInfo[0]['carro_name'], 'car' => $carInfo[0]]
        );
    }

    public function store(): void
    {
        $carro_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $car = new CarModel();

        $carPrice = $car->load(['price'], ['carro_id' => $carro_id]);

        $buy = new BuyModel($_POST + ['carro_id' => $carro_id, 'usuario_id' => $_SESSION['user'], 'compra_price' => $carPrice[0]['price']]);

        $buy->store();

        header('Location: /');
    }

}