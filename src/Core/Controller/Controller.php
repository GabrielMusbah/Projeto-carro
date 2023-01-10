<?php

namespace Plantae\Projeto\Core\Controller;

use Plantae\Projeto\Core\Helpers\Template;
use Plantae\Projeto\Core\Interfaces\ShowCrudInterface;

class Controller
{
   protected $template;

   public function __construct()
   {
        $this->template = new Template();
   }
}