<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 20),
            'title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'description' => $this->faker->sentence(37),
            'started' => $this->faker->dateTimeInInterval('-9 week', '0 week'),
            'ended' => $this->faker->dateTimeInInterval('0 week', '+9 week'),
        ];
    }
}
