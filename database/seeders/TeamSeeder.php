<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create(['user_id' => 1, 'name' => 'Monitoreo de Red', 'personal_team' => 1 ]);
    }
}
