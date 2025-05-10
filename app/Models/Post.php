<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'thumbnail', 'summary', 'content', 'category_id'
    ];

    // Mỗi bài viết thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
