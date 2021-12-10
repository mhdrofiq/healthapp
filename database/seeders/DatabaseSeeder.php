<?php

namespace Database\Seeders;

use App\Models\Heartrate;
use App\Models\Temperature;
use App\Models\User;
use App\Models\Senior;
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
        Senior::truncate();
        Temperature::truncate();
        Heartrate::truncate();

        //seed users (caretakers)
        
        $user1 = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('testpass'),
            'gender' => 'm',
        ]);
        $user2 = User::factory()->create([
            'gender' => 'm',
        ]);
        $user3 = User::factory()->create([
            'gender' => 'f',
        ]);

        //seed seniors

        $senior1 = Senior::factory()->create([
            'gender' => 'm',
            'user_id' => $user1->id
        ]);
        $senior2 = Senior::factory()->create([
            'gender' => 'f',
            'user_id' => $user2->id
        ]);
        $senior3 = Senior::factory()->create([
            'gender' => 'f',
            'user_id' => $user3->id
        ]);

        //seed temperatures

        Temperature::factory(5)->create([
            'senior_id' => $senior1->id
        ]);
        Temperature::factory(5)->create([
            'senior_id' => $senior2->id
        ]);
        Temperature::factory(5)->create([
            'senior_id' => $senior3->id
        ]);

        //seed heartrates

        Heartrate::factory(5)->create([
            'senior_id'=> $senior1->id
        ]);
        Heartrate::factory(5)->create([
            'senior_id'=> $senior2->id
        ]);
        Heartrate::factory(5)->create([
            'senior_id'=> $senior3->id
        ]);
    }
}
