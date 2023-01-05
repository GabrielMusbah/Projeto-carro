<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Model\UserModel;

class UserAdminController extends Controller
{

    public function index(): void
    {
        $user = new UserModel();

        $users = $user->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm']);

        $list = ['title' => 'Listar Usuarios', 'itens' => $users, 'logged' => true];

        if(isset($_SESSION['msg'])){
            $list['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];
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
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = new UserModel($_POST);

        $user->store();

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'success';
        $_SESSION['text'] = 'Usuario criado com sucesso!';

        header('Location: /admin/usuario');
    }



    public function edit(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserModel();

        $userBy = $user->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm'], ['usuario_id' => $id]);

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

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = new UserModel($_POST);

        $user->update(['usuario_id' => $usuario_id]);

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
  
        $user = new UserModel();

        $user->delete($usuario_id);
        
        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Usuario deletado com sucesso!';

        header('Location: /admin/usuario');
    }
}