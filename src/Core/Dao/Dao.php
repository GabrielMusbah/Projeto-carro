<?php

namespace Plantae\Projeto\Core\Dao;

use PDO;
use Plantae\Projeto\Config\DataBase;

class Dao
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = DataBase::createConnection();
    }
}

