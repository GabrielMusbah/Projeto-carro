<?php

namespace Plantae\Legendary\Model;
use Plantae\Legendary\Core\Model\Model;

class CarModel extends Model
{
    public $tableName = 'carro';

    const PATH = './assets/guest/img/uploads/car/';

    protected $fillable = [
        'carro_id',
        'carro_name',
        'price',
        'marca_id',
        'top_speed',
        'acceleration',
        'braking',
        'traction',
        'description',
        'carro_src',
        'seat'
    ];
}
