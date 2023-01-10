<?php

namespace Plantae\Legendary\Controller\Guest;

use Plantae\Legendary\Core\Controller\Controller;
use Plantae\Legendary\Core\Interfaces\LoginInterface;
use Plantae\Legendary\Core\Interfaces\ShowCrudInterface;
use Plantae\Legendary\Model\UserModel;

class LoginController extends Controller implements LoginInterface, ShowCrudInterface
{
    public function index(): void
    {
        $templateVars = ['title' => 'Login'];

        $this->template->render('Guest/Login', $templateVars);
    }

    public function login(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
        $senha = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

        $userByEmail = (new UserModel())->load(['password', 'adm', 'usuario_id'], ['email' => $email])[0];

        if(password_verify($senha, $userByEmail['password'])){

            $_SESSION['user'] = $userByEmail['usuario_id'];

            if($userByEmail['adm'] === true){
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
        //implementar no front
    }
}