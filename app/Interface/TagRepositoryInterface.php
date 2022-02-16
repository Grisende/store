<?php

namespace App\Interface;

interface TagRepositoryInterface
{
    public function getAllTags() : array;
    public function getTagbyId(int $id) : array;
    public function create(array $attributes) : void;
    public function update(int $id, array $attributes) : void;
    public function delete(int $id) : void;
}
