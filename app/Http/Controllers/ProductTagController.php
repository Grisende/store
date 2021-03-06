<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use App\Service\ProductTagService;
use App\Service\TagService;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{

    private $service;
    private $productService;
    private $tagService;

    public function __construct(ProductTagService $service, ProductService $productService, TagService $tagService)
    {
        $this->service  = $service;
        $this->productService  = $productService;
        $this->tagService  = $tagService;
    }

    public function form()
    {
        $products = $this->productService->getAllProducts();
        $tags = $this->tagService->getAllTags();
        return view('product.bind', compact('products', 'tags'));
    }

    public function create(Request $request)
    {
        $attributes = [
            'product_id' => $request['product_id'],
            'tag_id'     =>$request['tag_id']
        ];
        $this->service->create($attributes);

        return view('home');
    }

    public function relevanceReport()
    {
        $stdClass = $this->service->relevanceReport();

        $reports = json_decode(json_encode($stdClass), true);

        return view('reports/relevance', compact('reports'));
    }
}
