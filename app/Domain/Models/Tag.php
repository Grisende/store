<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = 'tag';

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
