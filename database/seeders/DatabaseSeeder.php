<?php

namespace Database\Seeders;

use App\Models\Heartrate;
use App\Models\Temperature;
use App\Models\User;
use App\Models\Senior;
use App\Models\Admin;
use App\Models\Device;
use App\Models\SensorData;
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
        Admin::truncate();
        Device::truncate();

        //seed admins

        Admin::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('pass'),
        ]);

        //seed users (caretakers)
        
        $user1 = User::factory()->create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'testpass',
            'gender' => 'Male',
        ]);
        $user2 = User::factory()->create([
            'gender' => 'Male',
            'password' => 'testpass',
        ]);
        $user3 = User::factory()->create([
            'gender' => 'Female',
            'password' => 'testpass',
        ]);

        //seed seniors

        $senior1 = Senior::factory()->create([
            'senior_gender' => 'Male',
            'user_id' => $user1->id
        ]);
        $senior2 = Senior::factory()->create([
            'senior_gender' => 'Female',
            'user_id' => $user2->id
        ]);
        $senior3 = Senior::factory()->create([
            'senior_gender' => 'Female',
            'user_id' => $user3->id
        ]);

        //seed devices

        $device1 = Device::factory()->create([
            'senior_id' => $senior1->id,
        ]);
    }
}
