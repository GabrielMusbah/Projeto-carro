<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\BuyModel;
use Plantae\Projeto\Model\CarModel;
use Plantae\Projeto\Model\UserModel;

class RecordController extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $user = new UserModel();

        $users = $user->load(['usuario_id', 'usuario_name']);

        $car = new CarModel();

        $cars = $car->load(['carro_id', 'carro_name']);

        $arrayVars = ['title' => 'Filtro do relatorio', 'usuarios' => $users, 'titleNav' => '- Carros', 'logged' => true, 'carros' => $cars];

        $this->template->render('Admin/Record', $arrayVars);
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

        $arrayVars = ['title' => 'Relatorio', 'itens' => $buys, 'titleNav' => '- Relatorio', 'logged' => true];

        $this->template->render('Admin/RecordFilter', $arrayVars);
    }
}