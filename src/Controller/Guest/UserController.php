<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Model\UserModel;

class UserController extends Controller
{
    use RenderHtml;

    public function create(): void
    {
        $this->renderHtml(
            'Guest/Cadastre.tpl',
            ['title' => 'Cadastro']
        );
    }

    public function store(): void
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $user = new UserModel($_POST);

        $user->store();

        $user = new UserModel();

        $userBy = $user->load(['usuario_id'], ['email' => $_POST['email']])[0];

        $_SESSION['logged'] = true;
        
        $_SESSION['user'] = $userBy['usuario_id'];

        header('Location: /');
    }

}
