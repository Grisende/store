<?php

namespace App\Service;

use App\Repository\TagRepository;

class TagService
{
    protected $repository;

    public function __construct(TagRepository $repository)
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
