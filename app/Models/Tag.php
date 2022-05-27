<?php

namespace App\Models;

use App\Traits\BelongsToManyPost;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Tag extends Model
{
    use HasFactory, BelongsToManyPost, Sluggable;

    protected $guarded = ['id'];


    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
