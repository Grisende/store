<?php

namespace App\Repository;

use App\Interface\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function getAllTags() : array
    {
        return Tag::all();
    }

    public function create(string $name) : void
    {
        Tag::create();
    }

    public function update(int $id, string $name) : void
    {
        Tag::whereId($id)->update($name);
    }

    public function delete(int $id) : void
    {
        Tag::destroy($id);
    }
}
