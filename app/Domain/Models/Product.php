<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
