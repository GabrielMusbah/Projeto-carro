<?php

namespace Plantae\Legendary\Core\Controller;

use Plantae\Legendary\Core\Helpers\Template;

class Controller
{
   protected $template;

   public function __construct()
   {
        $this->template = new Template();
   }
}