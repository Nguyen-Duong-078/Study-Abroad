<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'korean_name',
        'english_name',
        'slug',
        'img_thumbnail',
        'year_of',
        'number_of_students',
        'tuition',
        'dormitory',
        'address',
        'website',
        'description',
        'under',
        'content'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
