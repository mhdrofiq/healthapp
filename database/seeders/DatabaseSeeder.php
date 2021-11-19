<?php

namespace Database\Seeders;

use App\Models\Temperature;
use \App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Temperature::truncate();

        $user1 = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('testpass')
        ]);

        $user2 = User::factory()->create();
        $user3 = User::factory()->create();

        Temperature::factory(5)->create([
            'user_id' => $user1->id
        ]);

        Temperature::factory(5)->create([
            'user_id' => $user2->id
        ]);

        Temperature::factory(5)->create([
            'user_id' => $user3->id
        ]);
    }
}
