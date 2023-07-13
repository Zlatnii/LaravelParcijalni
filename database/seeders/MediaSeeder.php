<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            DB::table('media')->insert([
                'user_id' => User::all()->random()->id,
                'title' => fake()->unique()->sentence,
                'description' => fake()->paragraph(10, true),
                'type' => fake()->randomElement(['cd', 'blueray', 'dvd']),
                'year' => fake()->numberBetween(1950, 2023),
                'is_published' => fake()->boolean(),
            ]);
        
    }
}
