<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\CreateCrudInterface;
use Plantae\Projeto\Model\UserModel;

class UserController extends Controller implements CreateCrudInterface
{
    public function create(): void
    {
        $arrayVars = ['title' => 'Cadastro'];

        $this->template->render('Guest/Cadastre.tpl', $arrayVars);
    }

    public function store(): void
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = new UserModel($_POST);

        $user->store();

        $user = new UserModel();

        $userByEmail = $user->load(['usuario_id'], ['email' => $_POST['email']])[0];

        $_SESSION['logged'] = true;

        $_SESSION['user'] = $userByEmail['usuario_id'];

        header('Location: /');
    }
}
