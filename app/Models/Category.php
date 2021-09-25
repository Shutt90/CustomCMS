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

    public function fileRel()
    {
        return $this->belongsTo(File::class);
    }
}
