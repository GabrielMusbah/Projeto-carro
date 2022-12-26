<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class BrandModel extends Model
{

    const PATH = './assets/guest/img/uploads/brand/'; 

    protected $fillable = [
        'marca_id',
        'marca_name',
        'marca_src'
    ];


    public function getFile()
    {
        
        return self::PATH . $this->src;
    }

}
