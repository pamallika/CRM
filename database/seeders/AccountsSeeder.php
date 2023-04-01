<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $iteration = 1)
    {
        if ($iteration > 0 || $iteration < 1000)
       Account::factory($iteration)->create();
    }
}
