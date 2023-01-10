<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\LoginInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\UserModel;

class LoginController extends Controller implements LoginInterface, ShowCrudInterface
{
    public function index(): void
    {
        $arrayVars = ['title' => 'Login'];

        $this->template->render('Guest/Login', $arrayVars);
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

        $userByEmail = $user->load(['password', 'adm', 'usuario_id'], ['email' => $email])[0];

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