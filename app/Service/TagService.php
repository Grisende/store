<?php

namespace App\Service;

use App\Interface\TagRepositoryInterface;
use function PHPUnit\Framework\at;

class TagService
{

    private $repository;

    public function __construct(TagRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllTags() : array
    {
        $tags = $this->repository->getAllTags();

        return $tags;
    }

    public function getTagById(int $id) : array
    {
        $tag = $this->repository->getTagById($id);

        return $tag;
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
