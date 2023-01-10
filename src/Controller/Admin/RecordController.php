<?php

namespace Plantae\Legendary\Controller\Admin;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\BuyModel;
use Plantae\Legendary\Model\CarModel;
use Plantae\Legendary\Model\UserModel;

class RecordController extends Controller  implements ShowCrudInterface
{
    public function index(): void
    {
        $users = (new UserModel())->load(['usuario_id', 'usuario_name']);

        $cars = (new CarModel())->load(['carro_id', 'carro_name']);

        $templateVars = ['title' => 'Filtro do relatorio', 'usuarios' => $users, 'titleNav' => '- Carros', 'logged' => true, 'carros' => $cars];

        $this->template->render('Admin/Record', $templateVars);
    }

    public function indexFilter(): void
    {
        $where = [];

        $list = ['carro_id', 'usuario_id', 'price_start', 'price_end'];

        foreach($list as $key){

            if(!empty($_POST[$key])){
                $where[$key] = $_POST[$key];
            }

        }

        $buys = (new BuyModel())->loadJoin(['carro_trash', 'compra_id', 'usuario_name', 'carro_name', 'color', 'compra_price'], ['carro', 'marca', 'usuario'], $where);

        $templateVars = ['title' => 'Relatorio', 'itens' => $buys, 'titleNav' => '- Relatorio', 'logged' => true];

        $this->template->render('Admin/RecordFilter', $templateVars);
    }
}