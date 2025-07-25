<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::doesntHave('profile')->each(function (User $user) {
            Profile::factory()->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
