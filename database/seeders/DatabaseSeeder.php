<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $this->call([ // Hierarchical call to other seeders is important to ensure proper seeding order
            // Make such the parent seeder classes come first, before the child seeder classes.
            PlatformSeeder::class,
            PeopleSeeder::class
        ]);
    }
}
