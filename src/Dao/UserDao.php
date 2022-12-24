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

    public function load(): array
    {
        $sqlQuery = 'SELECT * FROM usuario';

        $stmt = $this->connection->query($sqlQuery);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $users;
    }

    public function loadByEmail(string $email)
    {

        $sqlQuery = 'SELECT * FROM usuario WHERE email = :email ;';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':email' => $email,
        ]);

        $users = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $users;

    }

    public function save(UserModel $user): bool
    {
        if ($user->id === null) {
            return $this->store($user);
        }

        //return $this->update($user);

    }

    public function store(UserModel $user): bool
    {
        $storeQuery = 'INSERT INTO usuario (usuario_name, email, password, adm) VALUES (:name, :email, :password, :adm);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':name' => $user->usuario_name,
            ':email' => $user->email,
            ':password' =>$user->password,
            ':adm' =>$user->adm,
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