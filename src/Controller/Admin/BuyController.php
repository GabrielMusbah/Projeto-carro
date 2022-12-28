<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\BuyDao;
use Plantae\Projeto\Dao\CarDao;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Model\BuyModel;

class BuyController extends Controller
{

    public function index(): void
    { 

        $buy = new BuyDao();

        $buys = $buy->load();

        $this->renderHtml(
            'Admin/Buy.tpl',
            ['title' => 'Compras', 'itens' => $buys, 'titleNav' => '- Carros', 'logged' => true]
        );
    }

    public function edit(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
 

        $buy = new BuyDao();

        $buyBy = $buy->loadById($id);

        $this->renderHtml(
            'Admin/BuyEdit.tpl',
            ['title' => 'Editar Compra', 'logged' => true, 'compra' => $buyBy[0]]
        );
    }

    public function update(): void
    {
        $compra_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
 

        $buy = new BuyDao();

        $car = new CarDao();

        $user = new UserDao();

        $carro_id = implode('', $car->loadByName($_POST['carro_name']));

        $usuario_id = implode('', $user->loadByName($_POST['usuario_name']));

        $buyInfo = new BuyModel($_POST + ['carro_id' => $carro_id, 'usuario_id' => $usuario_id, 'compra_id' => $compra_id]);

        $buy->update($buyInfo);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/compra');
    }

}
