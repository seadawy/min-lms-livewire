<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abdelrahman Seadawy',
            'email' => 'super@app.com',
            'is_admin' => true,
        ]);

        $this->call([
            // in case we need to add more levels then basic ones
            LevelSeeder::class,
            CourseSeeder::class,
        ]);
    }
}
