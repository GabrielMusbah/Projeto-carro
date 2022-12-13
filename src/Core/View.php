<?php

require __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir('./View/templates/');
$smarty->setCompileDir('./View/templates_c/');
$smarty->setCacheDir('./Cache/');
$smarty->setConfigDir('./Core/View.php');

