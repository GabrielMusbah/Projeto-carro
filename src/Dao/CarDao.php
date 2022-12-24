<?php

namespace Plantae\Projeto\Dao;

use PDO;
use Plantae\Projeto\Model\CarModel;

class CarDao
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function load()//: array
    {
        $sqlQuery = 'SELECT * FROM carro left join marca USING(marca_id);';

        $stmt = $this->connection->query($sqlQuery);
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $cars;
    }

    public function store(CarModel $car): bool
    {
        $storeQuery = 'INSERT INTO carro (carro_name, price, marca_id, top_speed, acceleration, braking, traction, description) VALUES (:name, :price, :marca_id, :top_speed, :acceleration, :braking, :traction, :description);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':carro' => $car->carro_name, 
            ':price' => $car->price, 
            ':marca_id' => $car->marca_id, 
            ':top_speed' => $car->top_speed, 
            ':acceleration' => $car->acceleration, 
            ':braking' => $car->braking, 
            ':traction' => $car->traction, 
            ':description' => $car->description
        ]);

        return $success;
    }

    // public function load(): array
    // {
    //     $sqlQuery = 'SELECT * FROM marca';

    //     $stmt = $this->connection->query($sqlQuery);
    //     $brands = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //     return $brands;
    // }

    // public function store(BrandModel $brand): bool
    // {
        // $storeQuery = 'INSERT INTO marca (name, src) VALUES (:name, :src);';

        // $stmt = $this->connection->prepare($storeQuery);

        // $success = $stmt->execute([
        //     ':name' => $brand->name,
        //     ':src' => $brand->src,
        // ]);

        // // if ($success) {
        // //     $brand->defineId($this->connection->lastInsertId());
        // // }

        // return $success;
    // }
}