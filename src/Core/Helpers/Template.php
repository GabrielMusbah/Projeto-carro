<?php

namespace Plantae\Legendary\Core\Helpers;

use Smarty;

class Template
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();

        $this->smarty->setTemplateDir('./../src/View/');
        $this->smarty->setCompileDir('./../storage/Template_c/');
        $this->smarty->setCacheDir('./../storage/Cache/');
        $this->smarty->setConfigDir('./Config');

    }
    
    public function render(string $routeTemplate, array $arrayVars = []): void
    {

        foreach($arrayVars as $key => $value){
            $this->smarty->assign($key, $value);
        }

        $this->smarty->display($routeTemplate . '.tpl');

    }
}