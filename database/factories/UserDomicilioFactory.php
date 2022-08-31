<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_domicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'users_id' => User::inRandomOrder()->value('id'),
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->randomNumber(3),
            'cp' => fake()->randomNumber(5),
            'colonia' => fake()->word(),
            'ciudad'=> fake()->city(),
        ];
    }
}
