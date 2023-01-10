<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Core\Controller\Controller;
use Plantae\Projeto\Core\Interfaces\LoginInterface;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;
use Plantae\Projeto\Model\UserModel;

class LoginAdminController extends Controller implements LoginInterface, ShowCrudInterface
{
    public function index(): void
    {
        $templateVars = ['title' => 'Login', 'titleNav' => '- Login', 'logged' => false];

        if(isset($_SESSION['msg'])){
            $templateVars['msg'] = ['msg' => $_SESSION['msg'], 'color' => $_SESSION['color'], 'text' => $_SESSION['text']];

            unset($_SESSION['msg']);
            unset($_SESSION['color']);
            unset($_SESSION['text']);
        }

        $this->template->render('Admin/Login', $templateVars);
    }

    public function login(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
        $senha = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

        $user = new UserModel();

        $userByEmail = $user->load(['password', 'adm', 'usuario_id'], ['email' => $email])[0];

        if(password_verify($senha, $userByEmail['password']) && $userByEmail['adm'] === true){
            $_SESSION['adminLogged'] = true;
            $_SESSION['user'] = $userByEmail['usuario_id'];
            header('Location: /admin');
        } else {
            $_SESSION['msg'] = true;
            $_SESSION['color'] = 'danger';
            $_SESSION['text'] = 'A senha ou email estão errados!';
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