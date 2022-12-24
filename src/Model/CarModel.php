<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class CarModel extends Model
{
    protected $fillable = [
        'carro_id',
        'carro_name',
        'price',
        'marca_id',
        'top_speed',
        'acceleration',
        'braking',
        'traction',
        'description'
    ];
}
