<?php

namespace App\Models;

use App\Traits\BelongsToManyPost;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, BelongsToManyPost, Sluggable;

    protected $guarded = ['id'];


    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('childrens');
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
