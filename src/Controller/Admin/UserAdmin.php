<?php

namespace Plantae\Projeto\Controller\Admin;

use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Controller\Guest\User;
use Plantae\Projeto\Core\Helpers\RenderHtml;
use Plantae\Projeto\Dao\UserDao;
use Plantae\Projeto\Model\UserModel;

class UserAdmin
{
    use RenderHtml;

    public function index(): void
    {
        $user = new User;

        $itens = $user->index();

        $this->renderHtml(
            'Admin/User.tpl',
            ['title' => 'Listar Usuarios', 'itens' => $itens, 'logged' => true]
        );
    }

    public function create(): void
    {
        $this->renderHtml(
            'Admin/UserCreate.tpl',
            ['title' => 'Criar Usuario', 'logged' => true]
        );
    }

    public function store(): void
    {
        $connection = DataBase::createConnection();

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);  
        
        $userInfo = new UserModel($_POST);

        $user = new UserDao($connection);

        $user->store($userInfo);

        header('Location: /admin');
    }



    public function edit(): void
    {
        $this->renderHtml(
            'Admin/UserEdit.tpl',
            ['title' => 'Editar Usuario', 'logged' => true]
        );
    }

    public function update(): void
    {
        
    }



    public function delete(): void
    {

    }
}