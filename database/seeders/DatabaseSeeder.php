<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        (new AccountsSeeder)->run(10);
        (new UsersSeeder)->run(10);
        (new ContactsSeeder)->run(10);
        (new CompaniesSeeder)->run(10);
        (new PipelinesSeeder)->run(10);
        (new StagesSeeder)->run(10);
        (new LeadsSeeder)->run(10);
    }
}
