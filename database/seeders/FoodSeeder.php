<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::create([
            'name' => 'banana',
            'calories' => '89',
        ]);
        Food::create([
            'name' => 'potato',
            'calories' => '77',
        ]);

    }
}
