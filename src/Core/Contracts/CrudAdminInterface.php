<?php

namespace Plantae\Projeto\Core\Contracts;

interface CrudInterface
{
    public function index(): void;

    public function find(): void;

    public function findBy(): void;

    public function create(): void;
    public function store(): void;

    public function edit(): void;
    public function update(): void;

    public function delete(): void;
}
