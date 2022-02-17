<?php

namespace App\Service;

use App\Interface\ProductTagRepositoryInterface;

class ProductTagService
{

    private $repository;

    public function __construct(ProductTagRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $attributes) : void
    {
        $this->repository->create($attributes);
    }

    public function update(int $id, array $attributes) : void
    {
        $this->repository->create($id, $attributes);
    }

    public function delete(int $id) : void
    {
        $this->repository->delete($id);
    }

}
