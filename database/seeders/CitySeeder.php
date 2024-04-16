<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        city::factory()
        ->count(50)
        ->hasplaces(3)
        ->hascars(3)
        ->hasairlines(3)
        ->hashotels(3)
        ->create();
    }
}
