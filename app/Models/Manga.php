<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable = ['title', 'description', 'cover', 'category_id', 'subcategory_id'];

    // Relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}