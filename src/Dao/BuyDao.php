<?php

namespace Plantae\Projeto\Dao;

use PDO;
use Plantae\Projeto\Core\Dao\Dao;
use Plantae\Projeto\Model\BuyModel;

class BuyDao extends Dao
{

    public function load()
    {
        $sqlQuery = 'SELECT * FROM compra left join carro USING(carro_id) left join usuario USING(usuario_id);';

        $stmt = $this->connection->query($sqlQuery);
        $buys = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $buys;
    }
    
    public function loadById($id): array
    {
        $sqlQuery = 'SELECT * FROM compra left join carro USING(carro_id) left join usuario USING(usuario_id) WHERE compra_id = :id';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute([
            ':id' => $id,
        ]);

        $buy = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $buy;
    }

    public function loadBy(array $where): array
    {

        $sqlWhere = [];

        $execute = [];

        $listId = ['carro_id', 'usuario_id'];

        foreach($where as $key => $value){

            if(in_array($key, $listId)){
                array_push($sqlWhere, "{$key} = :{$key}");
            }

            $execute[":{$key}"] = $value;

        };

        

        if(array_key_exists('price_start', $where) && array_key_exists('price_end', $where)){

            array_push($sqlWhere, "compra_price BETWEEN :price_start AND :price_end");

        } elseif (array_key_exists('price_start', $where)){

            array_push($sqlWhere, "compra_price > :price_start");

        } elseif (array_key_exists('price_end', $where)){

            array_push($sqlWhere, "compra_price < :price_end");

        }

        

        if(isset($where)){
            $sqlWhere = implode(" AND ",$sqlWhere);

            $sqlWhere = ' WHERE ' . $sqlWhere;
        }
        
        $sqlQuery = 'SELECT * FROM compra left join carro USING(carro_id) left join usuario USING(usuario_id)' . $sqlWhere . ';';

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute($execute);

        $buy = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $buy;
    }

    public function store(BuyModel $buy): bool
    {
        $storeQuery = 'INSERT INTO compra (carro_id, usuario_id, color, compra_price) VALUES (:carro_id, :usuario_id, :color, :price);';

        $stmt = $this->connection->prepare($storeQuery);

        $success = $stmt->execute([
            ':carro_id' => $buy->carro_id,
            ':usuario_id' => $buy->usuario_id,
            ':color' => $buy->color,
            ':price' => $buy->compra_price
        ]);

        return $success;
    }

    public function update(BuyModel $buy)
    {
        $updateQuery = 'UPDATE compra SET usuario_id = :usuario_id, carro_id = :carro_id, compra_price = :compra_price, color = :color WHERE compra_id = :id; ';

        $stmt = $this->connection->prepare($updateQuery);

        $success = $stmt->execute([
            ':id' => $buy->compra_id,
            ':usuario_id' => $buy->usuario_id,
            ':carro_id' => $buy->carro_id,
            ':compra_price' => $buy->compra_price,
            ':color' => $buy->color
        ]);

        return $success;
    }
}