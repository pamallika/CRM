<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Company;
use App\Models\Pipeline;
use App\Models\Stage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cost' => 0,
            'company_id' => Company::get()->random()->id,
            'pipeline_id' => Pipeline::get()->random()->id,
            'stage_id' => Stage::get()->random()->id,
            'user_id' => User::get()->random()->id,
            'account_id' => Account::get()->random()->id,
        ];
    }
}
