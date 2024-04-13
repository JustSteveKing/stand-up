<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Membership;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Steve McDougall',
            'email' => 'juststevemcd@gmail.com',
        ]);

        $team = Team::factory()->for($user, 'owner')->create([
            'name' => 'Treblle',
        ]);

        Membership::factory()->for($user)->for($team)->create([
            'role' => 'admin,'
        ]);

        $user->update([
            'current_team_id' => $team->id,
        ]);

        Department::factory()->for($team)->create([
            'name' => 'Developer Relations',
            'color' => 'purple',
        ]);
    }
}
