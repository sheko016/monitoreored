<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Deibis', 'email' => 'deibis@deibis.com', 'current_team_id' => 1 ,'password' => bcrypt('123456')]);
    }
}
