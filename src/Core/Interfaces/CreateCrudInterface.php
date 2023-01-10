<?php

namespace Plantae\Legendary\Core\Interfaces;

interface CreateCrudInterface
{
    public function create(): void;

    public function store(): void;
}