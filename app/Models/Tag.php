<?php

namespace App\Models;

use App\Traits\BelongsToManyPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Tag extends Model
{
    use HasFactory, BelongsToManyPost;

    protected $guarded = ['id'];


    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
