<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, BelongsToUser;
    // protected $with = [$this->user()];


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
