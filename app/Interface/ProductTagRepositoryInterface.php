<?php

namespace App\Interface;

interface ProductTagRepositoryInterface
{
    public function create(array $attributes) : void;
    public function update(int $id, array $attributes) : void;
    public function delete(int $id) : void;
}
