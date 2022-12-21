<?php

namespace Plantae\Projeto\Core\Model;

use JsonSerializable;

class Model implements JsonSerializable
{
    protected $fillable = [];
    
    protected $attributes = [];
    
    public function __construct($attributes)
    {
        $this->fill($attributes);
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