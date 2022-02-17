<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
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

        return $product;
//        return view('product/form', compact('product'));
    }

    public function form()
    {
        $tags = $this->tagService->getAllTags();

        return view('product/form', compact('tags'));
    }


    public function create(Request $request)
    {
        $this->service->create($request->all());
    }

    public function update(int $id, Request $request)
    {
        $this->service->update($id, $request->all());
    }

    public function delete(int $id)
    {
        $this->service->delete($id);
    }
}
