<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    public $table = 'product_tags';

    public $timestamps = false;

    protected $primaryKey = [
        'product_id',
        'tag_id'
    ];
}