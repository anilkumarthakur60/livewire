<?php

namespace App\Traits;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyPost
{


    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
