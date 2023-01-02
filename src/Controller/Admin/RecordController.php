<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\BuyDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Dao\UserDao;

class RecordController extends Controller
{
    public function index(): void
    {
        $user = new UserDao();

        $users = $user->load('usuario', ['usuario_id', 'usuario_name']);

        $car = new CarDao();

        $cars = $car->load();

        $this->renderHtml(
            'Admin/Record.tpl',
            ['title' => 'Filtro do relatorio', 'usuarios' => $users, 'titleNav' => '- Carros', 'logged' => true, 'carros' => $cars]
        );
    }

    public function indexFilter(): void
    {
        
        $buy = new BuyDao();

        $where = [];

        $list = ['carro_id', 'usuario_id', 'price_start', 'price_end'];

        foreach($list as $key){

            if(!empty($_POST[$key])){
                $where[$key] = $_POST[$key];
            }

        }

        
        $buys = $buy->loadBy($where);
        
        // dd(empty([]), $buys);
        $this->renderHtml(
            'Admin/RecordFilter.tpl',
            ['title' => 'Filtro do relatorio', 'itens' => $buys, 'titleNav' => '- Relatorio', 'logged' => true]
        );
    }
}