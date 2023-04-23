<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fn () => User::factory()->create()->id,
            'header'  => fake()->paragraph(),
            'avatar'  => fake()->imageUrl(640, 640, 'people'),
            'cover'   => fake()->sentence(),
            'skills'  => null,
        ];
    }
}
