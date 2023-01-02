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

    public function index()
    {
        $user = new UserDao();

        $users = $user->load('usuario', ['usuario_trash', 'usuario_id', 'usuario_name', 'email', 'adm']);

        return $users;
    }

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

        $user = new UserDao();

        $user->store(new UserModel($_POST));

        header('Location: /');
    }

}
