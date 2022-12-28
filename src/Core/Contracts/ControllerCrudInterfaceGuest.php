<?php

namespace Plantae\Projeto\Core\Contracts;

interface ControllerCrudInterfaceGuest
{
    public function index(): void;

    public function create(): void;
    
    public function store(): void;

}
