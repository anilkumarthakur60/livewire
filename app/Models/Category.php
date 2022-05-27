<?php

namespace App\Models;

use App\Traits\BelongsToManyPost;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory, BelongsToManyPost, Sluggable;

    protected $guarded = ['id'];


    public function childrens()
    {
        return $this->hasMany(Category::class, 'category_id')->with('childrens');
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
