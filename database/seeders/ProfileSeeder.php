<?php

namespace Database\Seeders;

use App\Models\Profile;
use Database\Factories\ProfileFactory;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::factory(100)->create();
    }
}
