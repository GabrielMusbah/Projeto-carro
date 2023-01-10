<?php

require __DIR__ . '/../../vendor/autoload.php';

use Plantae\Projeto\Core\Migration\Migration;

$migration = new Migration();

$function = $argv[1];

$migration->$function($argv);
