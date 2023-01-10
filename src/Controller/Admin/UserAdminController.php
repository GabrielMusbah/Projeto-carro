<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\CreateCrudInterface;
use Plantae\Projeto\Core\Interfaces\DeleteCrudInterface;
use Plantae\Projeto\Core\Interfaces\EditCrudInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\UserModel;

class UserAdminController extends Controller  implements ShowCrudInterface, CreateCrudInterface, EditCrudInterface, DeleteCrudInterface
{
    public function index(): void
    {
        $user = new UserModel();

        $users = $user->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm'], ['usuario_trash' => 'false']);

        $arrayVars = ['title' => 'Listar Usuarios', 'itens' => $users, 'logged' => true];

        if(isset($_SESSION['msg'])){
            $arrayVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];
        }

        $this->template->render('Admin/User', $arrayVars);

        unset($_SESSION['msg']);
        unset($_SESSION['color']);
        unset($_SESSION['text']);
    }

    public function create(): void
    {
        $arrayVars = ['title' => 'Criar Usuario', 'logged' => true];

        $this->template->render('Admin/UserCreate', $arrayVars);
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
        $usuarioId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserModel();

        $userBy = $user->load(['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm'], ['usuario_id' => $usuarioId]);

        $arrayVars = ['title' => 'Editar Usuario', 'logged' => true, 'usuario' => $userBy[0]];

        $this->template->render('Admin/UserEdit', $arrayVars);
    }

    public function update(): void
    {
        $usuarioId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = new UserModel($_POST);

        $user->update(['usuario_id' => $usuarioId]);

        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'secondary';
        $_SESSION['text'] = 'Usuario editado com sucesso!';

        header('Location: /admin/usuario');
    }

    public function delete(): void
    {
        $usuarioId = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
  
        $user = new UserModel();

        $user->delete($usuarioId);
        
        $_SESSION['msg'] = true;
        $_SESSION['color'] = 'danger';
        $_SESSION['text'] = 'Usuario deletado com sucesso!';

        header('Location: /admin/usuario');
    }
}