<?php

namespace App\Repository;

use App\Interface\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts() : array
    {
        return Product::all();
    }

    public function create(string $name) : void
    {
        Product::create();
    }

    public function update(int $id, string $name) : void
    {
        Product::whereId($id)->update($name);
    }

    public function delete(int $id) : void
    {
        Product::destroy($id);
    }
}
