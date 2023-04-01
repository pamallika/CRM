<?php

namespace Database\Seeders;

use App\Models\Pipeline;
use Illuminate\Database\Seeder;

class PipelinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $iteration = 1)
    {
        if ($iteration > 0 || $iteration < 1000)
        Pipeline::factory($iteration)->create();
    }
}
