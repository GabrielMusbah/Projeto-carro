<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Model\UserModel;

class LoginController extends Controller
{

    public function index(): void
    {
        $this->renderHtml(
            'Guest/Login.tpl',
            ['title' => 'Login']
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

        $user = new UserModel();

        $userBy = $user->load(['password', 'adm', 'usuario_id'], ['email' => $email])[0];

        if(password_verify($senha, $userBy['password'])){

            $_SESSION['user'] = $userBy['usuario_id'];

            if($userBy['adm'] === true){
                $_SESSION['adminLogged'] = true;
                header('Location: /admin');
            } else {
                $_SESSION['logged'] = true;
                header('Location: /');
            }
            
        } else {
            header('Location: /login');
        }

    }

    public function logout():void
    {
        
    }
}