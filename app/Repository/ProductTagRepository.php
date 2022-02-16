<?php

namespace App\Repository;

use App\Interface\ProductTagRepositoryInterface;
use App\Models\ProductTag;

class ProductTagRepository implements ProductTagRepositoryInterface
{
    public function create(string $name) : void
    {
        ProductTag::create();
    }

    public function update(int $id, string $name) : void
    {
        ProductTag::whereId($id)->update($name);
    }

    public function delete(int $id) : void
    {
        ProductTag::destroy($id);
    }
}
