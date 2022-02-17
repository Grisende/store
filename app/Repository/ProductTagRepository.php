<?php

namespace App\Repository;

use App\Interface\ProductTagRepositoryInterface;
use App\Models\ProductTag;
use Illuminate\Support\Facades\DB;

class ProductTagRepository implements ProductTagRepositoryInterface
{
    public function model()
    {
        return ProductTag::class;
    }

    public function create(array $attributes) : void
    {
//        dd($attributes);
        DB::table('product_tags')->insert($attributes);
    }

    public function update(int $id, array $attributes) : void
    {
        ProductTag::whereId($id)->update($attributes);
    }

    public function delete(int $id) : void
    {
        ProductTag::destroy($id);
    }
}
