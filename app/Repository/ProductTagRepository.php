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
        DB::table('product_tags')->insert($attributes);
    }

    public function relevanceReport() : array
    {
        return (array)DB::table('product_tags')
            ->select( 'tags.tag_id','tags.name')
            ->selectRaw('count(product_tags.product_id) as quantity')
            ->join('tags', 'tags.tag_id', '=', 'product_tags.tag_id')
            ->groupBy('product_tags.tag_id')
            ->get()->all();
    }
}
