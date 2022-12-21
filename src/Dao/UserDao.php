<?php

namespace Plantae\Projeto\Dao;

use Plantae\Projeto\Model\UserModel;
use PDO;

class UserDao
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function load()
    {
        $stmt = $this->connection->prepare("SELECT * FROM usuario");
        $stmt->execute();
        $codigos = $stmt->fetch();
       
        echo $codigos['id'];
    }

    public function loadByEmail(string $email): void
    {
        // $sqlQuery = 'SELECT * FROM usuario WHERE email = :email ;';
        // $stmt = $this->connection->prepare($sqlQuery);

        // $stmt->execute([
        //     ':email' => $email,
        // ]);

        // // $user = $stmt->fetch();

        // $user = $this->hydrateUserList($stmt);

        // echo $user['email'];s

        // select a particular user by id
        // $stmt = $this->connection->prepare("SELECT * FROM usuario ;");
        
        // $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // echo $user['id'];

        // $stmt = $this->connection->prepare("SELECT * FROM usuario");
        // $stmt->execute();
        // $codigos = $stmt->fetch();
       
        // echo $codigos['id'];

    }

    // private function hydrateUserList(\PDOStatement $stmt): array
    // {
    //     $userDataList = $stmt->fetchAll();
    //     $userList = [];

    //     foreach ($userDataList as $userData) {
    //         $userList[] = new UserModel(
    //             $userData['id'],
    //             $userData['name'],
    //             $userData['email'],
    //             $userData['password']
    //         );
    //     }

    //     return $userList;
    // }

    public function save(UserModel $user): bool
    {
        if ($user->id === null) {
            return $this->store($user);
        }

        //return $this->update($user);

    }

    public function store(UserModel $user): bool
    {
        $storeQuery = 'INSERT INTO usuario (name, email, password) VALUES (:name, :email, :password);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':name' => $user->name,
            ':email' => $user->email,
            ':password' =>$user->password,
        ]);

        // if ($success) {
        //     $user->defineId($this->connection->lastInsertId());
        // }

        return $success;
    }
/*     
    public function update(UserModel $user): bool
    {
        // atualiza usuarios
    }
     
    public function delete()
    {
        // deleta usuarios
    }
*/
}