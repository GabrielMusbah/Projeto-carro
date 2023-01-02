<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Dao\Orm;
use Plantae\Projeto\Dao\BuyDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Model\BuyModel;


class CarController extends Controller
{

    public function index(): void
    {
        $imgs = ['IconFerrari', 'IconLamborghini', 'IconMazda', 'IconBmw', 'IconMercedes', 'IconMaserati', 'IconJeep', 'IconVolvo', 'IconToyota'];

        $list = ['title' => 'Index', 'imgs' => $imgs];

        $car = new CarDao();


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
    
                    $list['cars'] = $car->loadOrder($value['order'], $value['filter']);
                    $list['filter'] = $key;

                }
            }
        }

        if(!array_key_exists('filter', $list)){

            $list['cars'] = $car->load();

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

        $car = new CarDao();

        $carInfo = $car->loadById($carro_id);

        // dd($carInfo[0]);

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

        $car = new CarDao();

        $carInfo = $car->loadById($carro_id);

        $buyInfo = new BuyModel($_POST + ['carro_id' => $carro_id, 'usuario_id' => $_SESSION['user'], 'price' => $carInfo[0]['price']]);

        $buy = new BuyDao();

        $buy->store($buyInfo);

        header('Location: /');
    }

}