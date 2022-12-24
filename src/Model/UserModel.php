<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class UserModel extends Model
{
    protected $fillable = [
        'usuario_id',
        'usuario_name',
        'email',
        'password',
        'adm',
    ];
}
