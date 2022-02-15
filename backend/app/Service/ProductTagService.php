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

    public function create(string $name) : void
    {
        $this->repository->create($name);
    }

    public function update(int $id, string $name) : void
    {
        $this->repository->create($id, $name);
    }

    public function delete(int $id) : void
    {
        $this->repository->delete($id);
    }

}
