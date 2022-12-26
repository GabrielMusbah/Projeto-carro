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

    public function loadById($id): array
    {
        $sqlQuery = 'SELECT * FROM carro WHERE carro_id = :id';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':id' => $id,
        ]);

        $car = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $car;
    }

    public function store(CarModel $car): bool
    {
        $storeQuery = 'INSERT INTO carro (carro_name, price, marca_id, top_speed, acceleration, braking, traction, description, carro_src, seat) VALUES (:carro_name, :price, :marca_id, :top_speed, :acceleration, :braking, :traction, :description, :src, :seat);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':carro_name' => $car->carro_name, 
            ':price' => $car->price, 
            ':marca_id' => $car->marca_id, 
            ':top_speed' => $car->top_speed, 
            ':acceleration' => $car->acceleration, 
            ':braking' => $car->braking, 
            ':traction' => $car->traction, 
            ':description' => $car->description,
            ':src' => $car->carro_src,
            ':seat' => $car->seat
        ]);

        return $success;
    }

    public function update(CarModel $car)
    {
        $updateQuery = 'UPDATE carro SET carro_name = :carro_name, price = :price, marca_id = :marca_id, top_speed = :top_speed, acceleration = :acceleration, braking = :braking, traction = :traction, description = :description, carro_src = :carro_src, seat = :seat WHERE carro_id = :id; ';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':id' => $car->carro_id,
            ':carro_name' => $car->carro_name, 
            ':price' => $car->price, 
            ':marca_id' => $car->marca_id, 
            ':top_speed' => $car->top_speed, 
            ':acceleration' => $car->acceleration, 
            ':braking' => $car->braking, 
            ':traction' => $car->traction, 
            ':description' => $car->description,
            ':carro_src' => $car->carro_src,
            ':seat' => $car->seat
        ]);

        return $success;
    }
}