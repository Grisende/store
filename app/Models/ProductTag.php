<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    public $table = 'product_tags';

    public $timestamps = false;

    protected $primaryKey = [
        'product_id',
        'tag_id'
    ];

    protected $fillable = [
        'product_id',
        'tag_id'
    ];

//    public function products()
//    {
//        return $this->hasMany(Product::class, 'id', 'product_id');
//    }
//
//
//
//    public function tags()
//    {
//        return $this->hasMany(Tag::class, 'id', 'tag_id');
//    }
}
