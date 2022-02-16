<?php

namespace App\Service;

use App\Interface\ProductRepositoryInterface;

class ProductService
{

    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllProducts() : array
    {
        $products = $this->repository->getAllProducts();

        return $products;
    }

    public function getProductById(int $id) : array
    {
        $product = $this->repository->getProductById($id);

        return $product;
    }

    public function create (array $attributes) : void
    {
        $this->repository->create($attributes);
    }

    public function update (int $id, array $attributes) : void
    {
        $this->repository->update($id, $attributes);
    }

    public function delete(int $id) : void
    {
        $this->repository->delete($id);
    }
}
