<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_path',
        'category_id'
    ];

    public function categoryRel()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
