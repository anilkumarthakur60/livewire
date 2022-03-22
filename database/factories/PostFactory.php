<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model = Post::class;
    public function definition()
    {
        return [

            'name' => $this->faker->unique()->name,
            'slug' => Str::slug($this->faker->unique()->name),
            'body' => $this->faker->paragraph(),
            'user_id' => User::factory(),

        ];
    }
}
