<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug','content', 'is_published'];

    //One to Many reverse
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Many to Many Tags
    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
}
