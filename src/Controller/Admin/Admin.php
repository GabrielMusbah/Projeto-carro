<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Model\UserModel;

class Admin
{
    use RenderHtml;

    public function index(): void
    {
        $this->renderHtml(
            'Admin/Index.tpl',
            ['title' => 'Admin']
        );
    }

    public function loginIndex(): void
    {
        $this->renderHtml(
            'Admin/Login.tpl',
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
            FILTER_SANITIZE_STRING
        );

        $connection = DataBase::createConnection();

        $user = new UserDao($connection);
        

        $userBy = $user->loadByEmail($email);

        //$userModel = new UserModel(['passowrd' => $userBy['password']]);

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

    public function create(): void
    {
        $connection = DataBase::createConnection();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);  
        
        $userInfo = new UserModel($_POST);

        $user = new UserDao($connection);

        $user->store($userInfo);

        header('Location: /admin');
    }


}