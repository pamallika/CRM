<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $iteration = 1)
    {
        if ($iteration > 0 || $iteration < 1000)
        Lead::factory($iteration)->create();
    }
}
