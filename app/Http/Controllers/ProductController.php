<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
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
