<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use App\Traits\PolyMorphicImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, BelongsToUser;
    use PolyMorphicImage;
    // protected $with = [$this->user()];

    protected $guarded = ['id'];


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
