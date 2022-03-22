<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    protected $model = Tag::class;
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'slug' => Str::slug($this->faker->unique()->name),

            //
        ];
    }
}
