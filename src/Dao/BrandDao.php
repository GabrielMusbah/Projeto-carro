<?php

namespace Plantae\Projeto\Dao;

use PDO;
use Plantae\Projeto\Core\Dao\Dao;
use Plantae\Projeto\Model\BrandModel;

class BrandDao extends Dao
{

    public function load(): array
    {
        $sqlQuery = 'SELECT * FROM marca';

        $stmt = $this->connection->query($sqlQuery);
        $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $brands;
    }


    public function loadById($id): array
    {
        $sqlQuery = 'SELECT * FROM marca WHERE marca_id = :id';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':id' => $id,
        ]);

        $brand = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $brand;
    }

    public function store(BrandModel $brand): bool
    {
        $storeQuery = 'INSERT INTO marca (marca_name, marca_src) VALUES (:name, :src);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':name' => $brand->marca_name,
            ':src' => $brand->marca_src,
        ]);

        // if ($success) {
        //     $brand->defineId($this->connection->lastInsertId());
        // }

        return $success;
    }

    public function update(BrandModel $brand)
    {
        $updateQuery = 'UPDATE marca SET marca_name = :name WHERE marca_id = :id; ';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':name' => $brand->marca_name,
            ':id' => $brand->marca_id,
        ]);

        return $success;
    }

    public function delete($marca_id)
    {
        $updateQuery = 'UPDATE marca SET marca_trash = :trash WHERE marca_id = :id; ';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':trash' => true,
            ':id' => $marca_id,
        ]);

        return $success;
    }
}