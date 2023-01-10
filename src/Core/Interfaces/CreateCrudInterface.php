<?php

namespace Plantae\Projeto\Core\Interfaces;

interface CreateCrudInterface
{
    public function create(): void;

    public function store(): void;
}