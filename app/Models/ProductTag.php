<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    public $table = 'product_tag';

    protected $primaryKey = [
        'product_id',
        'tag_id'
    ];
}
