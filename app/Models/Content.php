<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'file_path',
        'tab_title',
        'meta',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

}
