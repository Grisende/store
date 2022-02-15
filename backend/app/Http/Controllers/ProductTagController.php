<?php

namespace App\Http\Controllers;

use App\Service\ProductTagService;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{

    private $service;

    public function __construct(ProductTagService $service)
    {
        $this->service  = $service;
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
