<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\BuyDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Model\BuyModel;


class CarController extends Controller
{

    public function index(): void
    {
        $car = new CarDao();

        $cars = $car->load();

        // dd($cars);

        $this->renderHtml(
            'Guest/Index.tpl',
            ['title' => 'Index', 'cars' => $cars]
            
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