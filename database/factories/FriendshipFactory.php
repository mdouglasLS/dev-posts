<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FriendshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'following_user' => User::all('id')->random(),
            'followed_user' => User::all('id')->random(),
        ];
    }
}
