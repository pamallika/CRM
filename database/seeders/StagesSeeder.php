<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Seeder;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $iteration = 1)
    {
        if ($iteration > 0 || $iteration < 1000)
        Stage::factory($iteration)->create();
    }
}
