<?php

namespace App\Interface;

interface TagRepositoryInterface
{
    public function getAllTags() : array;
    public function getTagbyId(int $id) : array;
    public function create(string $name) : void;
    public function update(int $id, string $name) : void;
    public function delete(int $id) : void;
}
