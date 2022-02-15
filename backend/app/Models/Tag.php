<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $table = 'tags';

    public $timestamps = false;

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
