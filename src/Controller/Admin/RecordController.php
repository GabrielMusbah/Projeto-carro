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

        $users = $user->load();

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

        $buys = $buy->loadBy($_POST['carro_id'], $_POST['usuario_id']);

        dd($buys);


        // $this->renderHtml(
        //     'Admin/RecordFilter.tpl',
        //     ['title' => 'Filtro do relatorio', 'itens' => $users, 'titleNav' => '- Carros', 'logged' => true, 'carros' => $cars]
        // );
    }
}