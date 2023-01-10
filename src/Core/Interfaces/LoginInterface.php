<?php

namespace Plantae\Legendary\Core\Interfaces;

interface LoginInterface
{
    public function login(): void;

    public function logout(): void;
}