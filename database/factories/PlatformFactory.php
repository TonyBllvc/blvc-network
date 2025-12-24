<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Platform>
 */
class PlatformFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // TODO: Complete the definition array.
            // You can add more fields as necessary, using your own defined values 
            // i.e 'name' => 'John Doe'; as such.
            // or
            // You can use the faker library to generate fake random data.
            'name' => fake()->company(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5)
        ];
    }
}
