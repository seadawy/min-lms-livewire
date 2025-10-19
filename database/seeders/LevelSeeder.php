<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Advanced',
            'Manager',
            'Supervisor',
        ];

        foreach ($list as $item) {
            Level::create([
                'title' => $item,
            ]);
        }

    }
}
