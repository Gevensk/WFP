<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' =>$this->faker->name(),
            'email' =>$this->faker->email(),
            'username' =>$this->faker->userName(),
            'password' =>$this->faker->password()
        ];
    }
}
