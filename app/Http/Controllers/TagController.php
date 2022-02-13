<?php

namespace App\Http\Controllers;

use App\Service\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{

    protected $service;

    public function __construct(TagService $service)
    {
        $this->service = $service;
    }

    public function getAllTags()
    {
        $tags = $this->service->getAllTags();

        return view('tag/list', compact('tags'));
    }

    public function getTagById(int $id)
    {
        $tag = $this->service->getAllTags();

        return view('tag/form', compact('tag'));
    }

    public function create(Request $request)
    {
        $this->service->create($request);
    }

    public function update(int $id, Request $request)
    {
        $this->service->update($id, $request);
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
