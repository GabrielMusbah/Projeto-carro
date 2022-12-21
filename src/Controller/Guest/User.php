<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Model\UserModel;

class User
{
    use RenderHtml;

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
            'senha',
            FILTER_SANITIZE_STRING
        );

        $connection = DataBase::createConnection();

        $user = new UserDao($connection);

        $userBy = $user->load();

        echo $userBy;

        //$_SESSION['logado'] = true;
    }

    public function create(): void
    {
        $connection = DataBase::createConnection();

        $userInfo = new UserModel($_POST);

        $user = new UserDao($connection);

        $user->store($userInfo);

        header('Location: /');
    }



}
