<?php

namespace Plantae\Projeto\Dao;

use PDO;
use Plantae\Projeto\Model\BrandModel;

class BrandDao
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function load(): array
    {
        $sqlQuery = 'SELECT * FROM marca';

        $stmt = $this->connection->query($sqlQuery);
        $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $brands;
    }

    public function store(BrandModel $brand): bool
    {
        $storeQuery = 'INSERT INTO marca (marca_name, src) VALUES (:name, :src);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':name' => $brand->marca_name,
            ':src' => $brand->src,
        ]);

        // if ($success) {
        //     $brand->defineId($this->connection->lastInsertId());
        // }

        return $success;
    }
}