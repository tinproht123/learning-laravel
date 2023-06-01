<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory, UuidTrait;

    protected $fillable = ['title', 'body', 'user_id', 'category', 'slug'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}