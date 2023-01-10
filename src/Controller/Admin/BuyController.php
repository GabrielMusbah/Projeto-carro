<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\EditCrudInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\BuyModel;
use Plantae\Projeto\Model\CarModel;
use Plantae\Projeto\Model\UserModel;

class BuyController extends Controller  implements ShowCrudInterface, EditCrudInterface
{
    public function index(): void
    { 
        $buy = new BuyModel();

        $buys = $buy->loadJoin(['compra_id', 'usuario_name', 'carro_name', 'color', 'compra_price'], ['carro', 'usuario']);

        $arrayVars = ['title' => 'Compras', 'itens' => $buys, 'titleNav' => '- Carros', 'logged' => true];

        $this->template->render('Admin/Buy', $arrayVars);
    }

    public function edit(): void
    {
        $compraId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
 
        $buy = new BuyModel();

        $buyBy = $buy->loadJoin(['compra_id', 'usuario_name', 'usuario_id', 'carro_name', 'color', 'compra_price', 'carro_id'], ['carro', 'usuario'], ['compra_id' => $compraId]);

        $car = new CarModel();

        $cars = $car->load(['carro_name', 'carro_id']);

        $user = new UserModel();

        $users = $user->load(['usuario_name', 'usuario_id']);

        $arrayVars = ['title' => 'Editar Compra', 'logged' => true, 'compra' => $buyBy[0], 'carros' => $cars, 'usuarios' => $users];

        $this->template->render('Admin/BuyEdit.tpl', $arrayVars);
    }

    public function update(): void
    {
        $compraId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $buy = new BuyModel($_POST);

        $buy->update(['compra_id' => $compraId]);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/compra');
    }
}
