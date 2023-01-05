<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Model\BuyModel;
use Plantae\Projeto\Model\CarModel;
use Plantae\Projeto\Model\UserModel;

class RecordController extends Controller
{
    public function index(): void
    {
        $user = new UserModel();

        $users = $user->load(['usuario_id', 'usuario_name']);

        $car = new CarModel();

        $cars = $car->load(['carro_id', 'carro_name']);

        $this->renderHtml(
            'Admin/Record.tpl',
            ['title' => 'Filtro do relatorio', 'usuarios' => $users, 'titleNav' => '- Carros', 'logged' => true, 'carros' => $cars]
        );
    }

    public function indexFilter(): void
    {
        
        $buy = new BuyModel();

        $where = [];

        $list = ['carro_id', 'usuario_id', 'price_start', 'price_end'];

        foreach($list as $key){

            if(!empty($_POST[$key])){
                $where[$key] = $_POST[$key];
            }

        }

        $buys = $buy->loadJoin(['carro_trash', 'compra_id', 'usuario_name', 'carro_name', 'color', 'compra_price'], ['carro', 'marca', 'usuario'], $where);
        
        // dd(empty([]), $buys);
        $this->renderHtml(
            'Admin/RecordFilter.tpl',
            ['title' => 'Relatorio', 'itens' => $buys, 'titleNav' => '- Relatorio', 'logged' => true]
        );
    }
}