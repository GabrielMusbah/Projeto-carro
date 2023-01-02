<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Dao\UserDao;

class LoginAdminController extends Controller
{

    public function index(): void
    {
        $this->renderHtml(
            'Admin/Login.tpl',
            ['title' => 'Login', 'titleNav' => '- Login', 'logged' => false]
        );
    }

    public function login(): void
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );
    
        $senha = filter_input(
            INPUT_POST,
            'password',
            FILTER_DEFAULT
        );

        $user = new UserDao();

        $userBy = $user->load('usuario', ['password', 'adm'], ['email' => $email])[0];

        if(password_verify($senha, $userBy['password']) && $userBy['adm'] === true){
            $_SESSION['adminLogged'] = true;
            $_SESSION['user'] = $userBy['id'];
            header('Location: /admin');
        } else {
            header('Location: /admin/login');
        }

    }

    public function logout():void
    {
        unset($_SESSION['adminLogged']);
        unset($_SESSION['logged']);
        unset($_SESSION['user']);
        header('Location: /admin/login');
    }
}