<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\CarDao;

use function PHPSTORM_META\map;

class Car
{
    use RenderHtml;

    public function index(): void
    {
        $connection = DataBase::createConnection();  

        $car = new CarDao($connection);

        $cars = $car->load();

        // dd($cars);

        $this->renderHtml(
            'Guest/Index.tpl',
            ['title' => 'Index', 'cars' => $cars]
            
        );
    }

    public function carSale(): void
    {
        $car = [
            'name' =>'COMET SAFARI', 
            'price' => 710000, 
            'description' => 'xevetinho novo fiote', 
            'img' => 'comet',
            'mark' => 'IconFerrari'
        ];

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $this->renderHtml(
            'Guest/Sale.tpl',
            ['title' => $id, 'car' => $car]
        );
    }

}