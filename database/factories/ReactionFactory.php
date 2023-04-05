<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReactionFactory extends Factory
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
            'post_id' => Post::all('id')->random(),
            'reaction' => 'like'
        ];
    }
}
