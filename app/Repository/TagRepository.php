<?php

namespace App\Repository;

use App\Interface\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function getAllTags() : array
    {
        return Tag::all()->toArray();
    }

    public function getTagById(int $id) : array
    {
        return Tag::findOrFail($id)->toArray();
    }

    public function create(array $attributes) : void
    {
        Tag::create($attributes);
    }

    public function update(int $id, array $attributes) : void
    {
        Tag::findOrFail($id)->update($attributes);
    }

    public function delete(int $id) : void
    {
        Tag::destroy($id);
    }
}
