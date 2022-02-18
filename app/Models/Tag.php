<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $table = 'tags';

    public $timestamps = false;

    protected $primaryKey = 'tag_id';

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
        return $this->belongsToMany(ProductTag::class, 'product_tags', 'tag_id', 'tag_id');
    }
}
