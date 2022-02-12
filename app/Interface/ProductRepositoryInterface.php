<?php

namespace App\Interface;

interface ProductRepositoryInterface
{
    public function getAllProducts() : array;
    public function create(string $name) : void;
    public function update(int $id, string $name) : void;
    public function delete(int $id) : void;
}
