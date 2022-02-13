<?php

namespace App\Service;

use App\Repository\ProductRepository;

class ProductService
{
    protected $repository;

    public function __construct(ProductRepository $repository)
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

    public function create (string $name) : void
    {
        $this->repository->create($name);
    }

    public function update (int $id, string $name) : void
    {
        $this->repository->update($id, $name);
    }

    public function delete(int $id) : void
    {
        $this->repository->delete($id);
    }
}
