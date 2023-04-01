<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Pipeline;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StageFactory extends Factory
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
            'pipeline_id' => Pipeline::get()->random()->id,
            'position' => 0,
            'user_id' => User::get()->random()->id,
            'account_id' => Account::get()->random()->id,
        ];
    }
}
