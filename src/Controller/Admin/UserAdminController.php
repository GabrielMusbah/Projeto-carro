<?php

namespace Plantae\Legendary\Controller\Admin;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\CreateCrudInterface;
use Plantae\Legendary\Core\Interfaces\DeleteCrudInterface;
use Plantae\Legendary\Core\Interfaces\EditCrudInterface;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\UserModel;

class UserAdminController extends Controller  implements ShowCrudInterface, CreateCrudInterface, EditCrudInterface, DeleteCrudInterface
{
    public function index(): void
    {
        $users = (new UserModel())->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm'], ['usuario_trash' => 'false']);

        $templateVars = ['title' => 'Listar Usuarios', 'itens' => $users, 'logged' => true];

        if(isset($_SESSION['msg'])){
            $templateVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];

            unset($_SESSION['msg']);
            unset($_SESSION['color']);
            unset($_SESSION['text']);
        }

        $this->template->render('Admin/User', $templateVars);
    }

    public function create(): void
    {
        $templateVars = ['title' => 'Criar Usuario', 'logged' => true];

        $this->template->render('Admin/UserCreate', $templateVars);
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
        $usuarioId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $userBy = (new UserModel())->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm'], ['usuario_id' => $usuarioId]);

        $templateVars = ['title' => 'Editar Usuario', 'logged' => true, 'usuario' => $userBy[0]];

        $this->template->render('Admin/UserEdit', $templateVars);
    }

    public function update(): void
    {
        $usuarioId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = (new UserModel($_POST))->update(['usuario_id' => $usuarioId]);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/usuario');
    }

    public function delete(): void
    {
        $usuarioId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  
        $user = (new UserModel())->delete($usuarioId);
        
        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Usuario deletado com sucesso!';

        header('Location: /admin/usuario');
    }
}