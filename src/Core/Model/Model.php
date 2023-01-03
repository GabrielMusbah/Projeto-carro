<?php

namespace Plantae\Projeto\Core\Model;

use JsonSerializable;
use PDO;
use Plantae\Projeto\Config\DataBase;
use Plantae\Projeto\Core\Helpers\Orm;

class Model implements JsonSerializable
{
    protected PDO $connection;

    use Orm;

    public $tableName = '';
    
    protected $fillable = [];
    
    protected $attributes = [];
    
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);

        $this->connection = DataBase::createConnection();
    }

    public function fill($attributes = [])
    {
        foreach ($attributes as $attr => $value) {
            
            if(in_array($attr, $this->fillable))
                $this->attributes[$attr] = $value;
        }
    }

    public function __get($attr) 
    {
        if(array_key_exists($attr, $this->attributes))
            return $this->attributes[$attr];
    }

    public function __set($attr, $value) 
    {
        $this->$attr = $value;
    }

    public function jsonSerialize() {
        return $this->attributes;
    }

    //ORM

    // public function load($coluns, $where = [])
    // {
    //     return $this->loadOrm($this->tableName, $coluns, $where);
    // }

    // public function store()
    // {
    //     $this->storeOrm($this->attributes, $this->tableName);
    // }

    // public function update($where = [])
    // {
    //     $this->updateOrm($this->attributes, $this->tableName, $where);
    // }

    // public function delete($id)
    // {
    //     $this->deleteOrm($this->tableName, $id);
    // }

}