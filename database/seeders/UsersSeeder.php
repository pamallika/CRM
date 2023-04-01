<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $iteration = 1)
    {
        if ($iteration > 0 || $iteration < 1000)
        User::factory($iteration)->create();
    }
}
