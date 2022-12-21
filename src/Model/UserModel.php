<?php

namespace Plantae\Projeto\Model;
use Plantae\Projeto\Core\Model\Model;

class UserModel extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
}
