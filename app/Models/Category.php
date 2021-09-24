<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    private function relationship()
    {
        $this->belongsTo(File::class);
    }
}
