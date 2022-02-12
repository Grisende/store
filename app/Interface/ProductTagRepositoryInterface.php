<?php

namespace App\Interface;

interface ProductTagRepositoryInterface
{
    public function create(string $name) : void;
    public function update(int $id, string $name) : void;
    public function delete(int $id) : void;
}
