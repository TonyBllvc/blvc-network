<?php

namespace Database\Factories;

use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Factory definition for People model
        // You can customize the fields as per your model's requirements.
        return [
            // TODO: Complete the definition array.
            // You can add more fields as necessary, using your own defined values 
            // i.e 'name' => 'John Doe'; as such.
            // or
            // You can use the faker library to generate fake random data.
            'name' => fake()->name(),
            'bio' => fake()->realText(400),
            'skill' => fake()->numberBetween(0, 100),
            'platform_id' => Platform::inRandomOrder()->first()->id, // the platform_id field as a foreign key(based on the platforms table, "platform")
        ];
    }
}

/**
 * To use this factory in your tests or seeders, you can do the following:
 * > php artisan tinker
 * > use App\Models\People
 * > People::factory()->count(10)->create()
 */