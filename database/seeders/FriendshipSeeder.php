<?php

namespace Database\Seeders;

use App\Models\Friendship;
use Illuminate\Database\Seeder;

class FriendshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Friendship::factory(500)->create();
    }
}
