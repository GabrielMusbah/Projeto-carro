<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class BuyModel extends Model
{
    public $tableName = 'compra';
    
    protected $fillable = [
        'compra_id',
        'carro_id',
        'usuario_id',
        'compra_price',
        'color'
    ];

}
