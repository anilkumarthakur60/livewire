<?php

namespace App\Traits;

use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyPost
{


    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
