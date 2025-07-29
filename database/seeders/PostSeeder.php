<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::limit(4)->get();

        if ($users->isEmpty()) {
            $users = User::factory(4)->create();
        }

        foreach ($users as $user) {
            Post::factory(6)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
