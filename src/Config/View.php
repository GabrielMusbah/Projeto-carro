<?php

require __DIR__ . './../../vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir('./../src/View/Guest/');
$smarty->setCompileDir('./../storage/Template_c/');
$smarty->setCacheDir('./../storage/Cache/');
$smarty->setConfigDir('./Config');
