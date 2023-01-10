<?php

namespace Plantae\Projeto\Config;

use Dotenv\Dotenv;

class DotenvConfig
{
    private $dotenv;

    public function __construct()
    {
        $this->dotenv = Dotenv::createImmutable( __DIR__ . '/../../' );
    }
     
    public function load()
    {
        $this->dotenv->load();
    }
}




