<?php

namespace Plantae\Legendary\Model;
use Plantae\Legendary\Core\Model\Model;

class UserModel extends Model
{
    public $tableName = 'usuario';

    protected $fillable = [
        'usuario_id',
        'usuario_name',
        'email',
        'password',
        'adm',
    ];
}
