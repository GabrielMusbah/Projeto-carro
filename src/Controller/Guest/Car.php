<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Helpers\RenderHtml;

class Car
{
    use RenderHtml;

    public function index(): void
    {
        $car = [
            '0' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '1'
            ],
            '1' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '2'
            ],
            '2' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '3'
            ],
            '3' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '4'
            ],
            '4' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '5'
            ],
            '5' => [
                'name' =>'COMET SAFARI', 
                'price' => 710000, 
                'seat' => '2', 
                'img' => 'comet',
                'id' => '6'
            ]
        ];

        $this->renderHtml(
            'Guest/Index.tpl',
            ['title' => 'Index', 'cars' => $car]
            
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