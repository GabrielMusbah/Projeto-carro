<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Controller\Guest\UserController;
use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Model\UserModel;

class UserAdminController extends Controller
{

    public function index(): void
    {
        $user = new UserController;

        $itens = $user->index();

        if(isset($_SESSION['msg'])){
            $list = ['title' => 'Listar Usuarios', 'itens' => $itens, 'logged' => true, 'msg' => ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']]];
        } else {
            $list = ['title' => 'Listar Usuarios', 'itens' => $itens, 'logged' => true];
        }

        $this->renderHtml(
            'Admin/User.tpl',
            $list
        );

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/UserCreate.tpl',
            ['title' => 'Criar Usuario', 'logged' => true]
        );
    }

    public function store(): void
    {
       
        $userInfo = new UserModel($_POST);

        $user = new UserDao();

        $user->store($userInfo);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Usuario criado com sucesso!';

        header('Location: /admin');
    }



    public function edit(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserDao();

        $userBy = $user->loadById($id);

        $this->renderHtml(
            'Admin/UserEdit.tpl',
            ['title' => 'Editar Usuario', 'logged' => true, 'usuario' => $userBy[0]]
        );
    }

    public function update(): void
    {
        $usuario_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserDao();

        $userInfo = new UserModel($_POST + ['usuario_id' => $usuario_id]);

        $user->update($userInfo);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/usuario');
    }



    public function delete(): void
    {
        $usuario_id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserDao();

        $user->delete($usuario_id);
        
        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Usuario deletado com sucesso!';

        header('Location: /admin/usuario');
    }
}