<?php

namespace Plantae\Projeto\Controller\Guest;

use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Model\UserModel;

class UserController
{
    use RenderHtml;

    public function index()
    {
        $connection = DataBase::createConnection();  

        $user = new UserDao($connection);

        $users = $user->load();

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
        $connection = DataBase::createConnection(); 

        $userInfo = new UserModel($_POST);

        $user = new UserDao($connection);

        $user->store($userInfo);

        header('Location: /');
    }

}
