<?php

namespace Plantae\Projeto\Controller\Helpers;

trait RenderHtml
{
    public function renderHtml(string $routeTemplate, array $routeListVar): void
    {
        require __DIR__ . './../../Config/View.php';

        $smarty->assign('listVar', $routeListVar);

        $smarty->display($routeTemplate);

    }
}