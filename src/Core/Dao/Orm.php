<?php

namespace Plantae\Projeto\Core\Dao;

use PDO;
use Plantae\Projeto\Config\DataBase;

class Orm
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = DataBase::createConnection();
    }

    public function load(string $table, array $coluns, array $where = []): array
    {
        //Gera uma string das colunas que devem ser puxadas do BD
        $sqlColuns = implode(', ', $coluns);

        //Gera um array com as condições de Where
        $sqlWhere = $this->where($where);
        
        //Gera um array com os valores a serem usados pelo execute
        $sqlExecute = [];

        foreach($where as $key => $value){

            $sqlExecute[":{$key}"] = $value;

        };
        
        $sqlQuery = "SELECT {$sqlColuns} FROM {$table}{$sqlWhere}";

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute($sqlExecute);

        $loadList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $loadList;
    }

    public function store(object $object): void
    {
        //Gera duas strings, um pras colunas um pros values e um array pras variaveis do execute
        $sqlColuns = [];

        $sqlValues = [];

        $sqlExecute = [];

        foreach($object->load() as $key => $value){

            array_push($sqlColuns, $key);

            array_push($sqlValues, ":{$key}");

            $sqlExecute[":{$key}"] = $value;
            
        };

        $sqlColuns = implode(", ", $sqlColuns);

        $sqlValues = implode(", ", $sqlValues);
 
        
        $storeQuery = "INSERT INTO {$object->tableName} ({$sqlColuns}) VALUES ({$sqlValues});";

        $stmt = $this->connection->prepare($storeQuery);

        $stmt->execute($sqlExecute);

    }

    public function update(object $object, array $where): void
    {
        //Gera duas string, um pras colunas um pros values
        $sqlColuns = [];

        $sqlExecute = [];

        foreach($object->load() as $key => $value){

            array_push($sqlColuns, "{$key} = :{$key}");

            $sqlExecute[":{$key}"] = $value;
            
        };

        $sqlColuns = implode(", ", $sqlColuns);

        //Gera uma string das condições a ser aplicada no load
        if(!empty($where)){

            foreach($where as $key => $value){

                $sqlExecute[":{$key}"] = $value;
                
            };

        }

        $sqlWhere = $this->where($where);


        $updateQuery = "UPDATE {$object->tableName} SET {$sqlColuns}{$sqlWhere}";

        $stmt = $this->connection->prepare($updateQuery);

        $stmt->execute($sqlExecute);
    }

    public function delete(string $table, $id): void
    {
        $sqlExecute = [':trash' => true, ':id' => $id];

        $deleteQuery = "UPDATE {$table} SET {$table}_trash = :trash WHERE {$table}_id = :id" ;

        $stmt = $this->connection->prepare($deleteQuery);

        $stmt->execute($sqlExecute);
    }

    private function where($where): string
    {
        //Gera uma string das condições a ser aplicada no load
        if(empty($where))
            return '';


        $sqlWhere = [];

        foreach($where as $key => $value){

            array_push($sqlWhere, "{$key} = :{$key}");
            
        };

        $sqlWhere = implode(" AND ",$sqlWhere);

        return ' WHERE ' . $sqlWhere;
            
 
    }
}
