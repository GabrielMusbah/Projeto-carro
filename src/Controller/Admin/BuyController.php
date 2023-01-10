<?php

namespace Plantae\Legendary\Controller\Admin;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\EditCrudInterface;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\BuyModel;
use Plantae\Legendary\Model\CarModel;
use Plantae\Legendary\Model\UserModel;

class BuyController extends Controller  implements ShowCrudInterface, EditCrudInterface
{
    public function index(): void
    { 
        $buy = new BuyModel();

        $buys = $buy->loadJoin(['compra_id', 'usuario_name', 'carro_name', 'color', 'compra_price'], ['carro', 'usuario']);

        $templateVars = ['title' => 'Compras', 'itens' => $buys, 'titleNav' => '- Carros', 'logged' => true];

        $this->template->render('Admin/Buy', $templateVars);
    }

    public function edit(): void
    {
        $compraId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $buyBy = (new BuyModel())->loadJoin(['compra_id', 'usuario_name', 'usuario_id', 'carro_name', 'color', 'compra_price', 'carro_id'], ['carro', 'usuario'], ['compra_id' => $compraId]);

        $cars = (new CarModel())->load(['carro_name', 'carro_id']);

        $users = (new UserModel())->load(['usuario_name', 'usuario_id']);

        $templateVars = ['title' => 'Editar Compra', 'logged' => true, 'compra' => $buyBy[0], 'carros' => $cars, 'usuarios' => $users];

        $this->template->render('Admin/BuyEdit.tpl', $templateVars);
    }

    public function update(): void
    {
        $compraId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $buy = (new BuyModel($_POST))->update(['compra_id' => $compraId]);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/compra');
    }
}
