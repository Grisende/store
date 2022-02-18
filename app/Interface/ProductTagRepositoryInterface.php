<?php

namespace App\Interface;

interface ProductTagRepositoryInterface
{
    public function create(array $attributes) : void;
    public function relevanceReport() : array;
}
