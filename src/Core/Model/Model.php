<?php

namespace Plantae\Legendary\Core\Model;

use JsonSerializable;
use PDO;
use Plantae\Legendary\Config\DataBase;
use Plantae\Legendary\Core\Helpers\Orm;

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

}