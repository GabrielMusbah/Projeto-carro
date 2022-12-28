<?php

namespace Plantae\Projeto\Dao;

use Plantae\Projeto\Model\UserModel;
use PDO;
use Plantae\Projeto\Core\Dao\Dao;

class UserDao extends Dao
{

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

    public function loadById($id)
    {
        $sqlQuery = 'SELECT * FROM usuario WHERE usuario_id = :id';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':id' => $id,
        ]);

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $user;
    }

    public function loadByName($name): array
    {
        $sqlQuery = 'SELECT usuario_id FROM usuario WHERE usuario_name = :name';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':name' => $name,
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $user;
    }

    // public function save(UserModel $user): bool
    // {
    //     if ($user->id === null) {
    //         return $this->store($user);
    //     }

    //     //return $this->update($user);

    // }

    public function store(UserModel $user): bool
    {
        $storeQuery = 'INSERT INTO usuario (usuario_name, email, password, adm) VALUES (:name, :email, :password, :adm);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':name' => $user->usuario_name,
            ':email' => $user->email,
            ':password' => password_hash($user->password, PASSWORD_ARGON2I),
            ':adm' =>$user->adm,
        ]);

        return $success;
    }
 
    public function update(UserModel $user): bool
    {
        $updateQuery = 'UPDATE usuario SET usuario_name = :name, email = :email, password = :password, adm = :adm WHERE usuario_id = :id;';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':id' => $user->usuario_id,
            ':name' => $user->usuario_name,
            ':email' => $user->email,
            ':password' => password_hash($user->password, PASSWORD_ARGON2I),
            ':adm' => $user->adm,
        ]);

        return $success;

    }
     
    public function delete($usuario_id)
    {
        $updateQuery = 'UPDATE usuario SET usuario_trash = :trash WHERE usuario_id = :id; ';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':trash' => true,
            ':id' => $usuario_id,
        ]);

        return $success;
    }

}