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

    public function relevanceReport() : array
    {
        return $this->repository->relevanceReport();
    }

}
