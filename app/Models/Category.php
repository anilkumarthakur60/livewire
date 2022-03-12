<?php

namespace App\Models;

use App\Traits\BelongsToManyPost;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, BelongsToManyPost;

    protected $guarded = ['id'];
}
