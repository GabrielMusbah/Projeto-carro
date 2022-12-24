<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Model\UserModel;

class User
{
    use RenderHtml;

    public function index(){
        $connection = DataBase::createConnection();  

        $user = new UserDao($connection);

        $users = $user->load();

        return $users;
    }

    public function loginIndex(): void
    {
        $this->renderHtml(
            'Guest/Login.tpl',
            ['title' => 'Login']
        );
    }

    public function cadastreIndex(): void
    {
        $this->renderHtml(
            'Guest/Cadastre.tpl',
            ['title' => 'Cadastro']
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
            FILTER_SANITIZE_STRING
        );

        $connection = DataBase::createConnection();

        $user = new UserDao($connection);

        $userBy = $user->loadByEmail($email);

        //$userModel = new UserModel(['passowrd' => $userBy['password']]);

        if(password_verify($senha, $userBy['password'])){
            $_SESSION['logged'] = true;
            $_SESSION['user'] = $userBy['usuario_id'];
            header('Location: /');
        } else {
            header('Location: /login');
        }

    }

    public function create(): void
    {
        $connection = DataBase::createConnection();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);    

        $userInfo = new UserModel($_POST);

        $user = new UserDao($connection);

        $user->store($userInfo);

        header('Location: /');
    }



}
