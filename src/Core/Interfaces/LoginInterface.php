<?php

namespace Plantae\Projeto\Core\Interfaces;

interface LoginInterface
{
    public function login(): void;

    public function logout(): void;
}