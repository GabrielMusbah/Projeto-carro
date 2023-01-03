<?php

namespace Plantae\Projeto\Core\Helpers;

use PDO;

trait Orm
{
    public function load(array $coluns, array $where = []): array
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
        
        $sqlQuery = "SELECT {$sqlColuns} FROM {$this->tableName}{$sqlWhere}";

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute($sqlExecute);

        $loadList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $loadList;
    }

    public function loadJoin(array $coluns, array $join, array $where = [])
    {
        //Gera uma string das colunas que devem ser puxadas do BD
        $sqlColuns = implode(', ', $coluns);

        $sqlJoin = [];

        foreach($join as $key => $value){

            array_push($sqlJoin, "left join {$value} USING ({$value}_id)");
            
        };

        $sqlJoin = implode(" ",$sqlJoin);

        //Gera um array com as condições de Where
        $sqlWhere = $this->where($where);

        //Gera um array com os valores a serem usados pelo execute
        $sqlExecute = [];

        foreach($where as $key => $value){

            $sqlExecute[":{$key}"] = $value;

        };
        
        $sqlQuery = "SELECT {$sqlColuns} FROM {$this->tableName} {$sqlJoin}{$sqlWhere};";

        $stmt = $this->connection->prepare($sqlQuery);

        $stmt->execute($sqlExecute);
        
        $buys = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $buys;
    }

    public function store(): void
    {
        //Gera duas strings, um pras colunas um pros values e um array pras variaveis do execute
        $sqlColuns = [];

        $sqlValues = [];

        $sqlExecute = [];

        foreach($this->attributes as $key => $value){

            array_push($sqlColuns, $key);

            array_push($sqlValues, ":{$key}");

            $sqlExecute[":{$key}"] = $value;
            
        };

        $sqlColuns = implode(", ", $sqlColuns);

        $sqlValues = implode(", ", $sqlValues);
 
        
        $storeQuery = "INSERT INTO {$this->tableName} ({$sqlColuns}) VALUES ({$sqlValues});";

        $stmt = $this->connection->prepare($storeQuery);

        $stmt->execute($sqlExecute);

    }

    public function update(array $where = []): void
    {
        //Gera duas string, um pras colunas um pros values
        $sqlColuns = [];

        $sqlExecute = [];

        foreach($this->attributes as $key => $value){

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


        $updateQuery = "UPDATE {$this->tableName} SET {$sqlColuns}{$sqlWhere}";

        $stmt = $this->connection->prepare($updateQuery);

        $stmt->execute($sqlExecute);
    }

    public function delete($id): void
    {
        $sqlExecute = [':trash' => true, ':id' => $id];

        $deleteQuery = "UPDATE {$this->tableName} SET {$this->tableName}_trash = :trash WHERE {$this->tableName}_id = :id" ;

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