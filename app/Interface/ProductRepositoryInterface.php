<?php

namespace App\Interface;

interface ProductRepositoryInterface
{
    public function getAllProducts() : array;
    public function getProductById(int $id) : array;
    public function create(array $attributes) : array;
    public function update(int $id, array $attributes) : void;
    public function delete(int $id) : void;
}
