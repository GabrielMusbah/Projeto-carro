<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class CarModel extends Model
{
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
