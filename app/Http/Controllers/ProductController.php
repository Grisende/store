<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use App\Service\ProductTagService;
use App\Service\TagService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $service;
    private $tagService;

    public function __construct(ProductService $service, TagService $tagService)
    {
        $this->service = $service;
        $this->tagService = $tagService;
    }

    public function getAllProducts()
    {
        $products = $this->service->getAllProducts();

        return view('product/list', compact('products'));
    }

    public function getProductById(int $id)
    {
        $product = $this->service->getProductById($id);

        return view('product/form', compact('product'));
    }

    public function form()
    {
        $tags = $this->tagService->getAllTags();

        return view('product/form', compact('tags'));
    }


    public function create(Request $request)
    {
        $this->service->create($request->all());
        return $this->getAllProducts();
    }

    public function update(int $id, Request $request)
    {
        $this->service->update($id, $request->all());
        return $this->getAllProducts();
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
