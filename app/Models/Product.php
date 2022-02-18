<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    public $timestamps = false;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name'
    ];

    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    public function ProductTags()
    {
        return $this->belongsToMany(ProductTag::class, 'product_tags', 'product_id', 'product_id');
    }
}
