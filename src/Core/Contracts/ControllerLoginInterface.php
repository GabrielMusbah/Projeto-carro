<?php

namespace Plantae\Projeto\Core\Contracts;

interface ControllerLoginInterface
{
    public function index(): void;


    public function login(): void;


    public function logout():void;

}