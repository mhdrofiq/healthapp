<?php

namespace Database\Seeders;

use App\Models\Heartrate;
use App\Models\Temperature;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        Heartrate::truncate();

        $user1 = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('testpass'),
            'gender' => 'm',
            'usertype' => 's'
        ]);

        $user2 = User::factory()->create([
            'gender' => 'm',
            'usertype' => 'c'
        ]);

        $user3 = User::factory()->create([
            'gender' => 'f',
            'usertype' => 's'
        ]);

        Temperature::factory(5)->create([
            'user_id' => $user1->id
        ]);

        Temperature::factory(5)->create([
            'user_id' => $user2->id
        ]);

        Temperature::factory(5)->create([
            'user_id' => $user3->id
        ]);

        Heartrate::factory(5)->create([
            'user_id'=> $user1->id
        ]);

        Heartrate::factory(5)->create([
            'user_id'=> $user2->id
        ]);

        Heartrate::factory(5)->create([
            'user_id'=> $user3->id
        ]);
    }
}
