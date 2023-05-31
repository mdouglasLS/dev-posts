<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all('id')->random(),
            'profile_image' => $this->faker->imageUrl(300,300),
            'about' => $this->faker->paragraph(),
            'work' => $this->faker->sentence(15),
            'education' => $this->faker->sentence(15),
        ];
    }
}
