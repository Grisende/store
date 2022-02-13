<?php

namespace App\Service;

use App\Repository\ProductTagRepository;

class ProductTagService
{

    protected $repository;

    public function __construct(ProductTagRepository $repository)
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
