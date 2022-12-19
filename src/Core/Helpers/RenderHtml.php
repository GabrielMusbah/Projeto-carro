<?php

namespace Plantae\Projeto\Core\Helpers;

trait RenderHtml
{
    public function renderHtml(string $routeTemplate, array $routeListVar): void
    {
        require __DIR__ . './../../Config/View.php';

        foreach($routeListVar as $key => $value){
            $smarty->assign($key, $value);
        }

        $smarty->display($routeTemplate);

    }
}