<?php

namespace Plantae\Legendary\Controller\Guest;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\CreateCrudInterface;
use Plantae\Legendary\Model\UserModel;

class UserController extends Controller implements CreateCrudInterface
{
    public function create(): void
    {
        $templateVars = ['title' => 'Cadastro'];

        $this->template->render('Guest/Cadastre', $templateVars);
    }

    public function store(): void
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = (new UserModel($_POST + ['adm' => 'false']))->store();

        $userByEmail = (new UserModel())->load(['usuario_id'], ['email' => $_POST['email']])[0];

        $_SESSION['logged'] = true;

        $_SESSION['user'] = $userByEmail['usuario_id'];

        header('Location: /');
    }
}
