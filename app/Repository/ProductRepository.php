<?php

namespace App\Repository;

use App\Interface\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts() : array
    {
        return Product::all()->toArray();
    }

    public function getProductById(int $id) : array
    {
        return Product::findOrFail($id)->toArray();
    }

    public function create(array $attributes) : array
    {
        return Product::create($attributes)->toArray();
    }

    public function update(int $id, array $attributes) : void
    {
        Product::findOrFail($id)->update($attributes);
    }

    public function delete(int $id) : void
    {
        Product::destroy($id);
    }
}
