<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Contract\Auth;

class FirebaseController extends Controller
{
    public function index(){

        include('dbcon.php');

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2022-01-10 15:00:00',
        //     'temperature' => '36',
        //     'ecg' => '85', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2022-01-10 16:00:00',
        //     'temperature' => '37',
        //     'ecg' => '86', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2022-01-10 17:00:00',
        //     'temperature' => '39',
        //     'ecg' => '120', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2022-01-10 18:00:00',
        //     'temperature' => '35',
        //     'ecg' => '79', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2022-01-10 19:00:00',
        //     'temperature' => '34',
        //     'ecg' => '80', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2022-01-12 15:00:00',
        //     'temperature' => '35',
        //     'ecg' => '78', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2022-01-12 16:00:00',
        //     'temperature' => '36',
        //     'ecg' => '79', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2022-01-12 17:00:00',
        //     'temperature' => '37',
        //     'ecg' => '80', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2022-01-12 18:00:00',
        //     'temperature' => '38',
        //     'ecg' => '81', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2022-01-12 19:00:00',
        //     'temperature' => '39',
        //     'ecg' => '82', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => Carbon::now()->toDateTimeString(), // Produces something like "2019-03-11 12:25:00",
        //     'temperature' => '39',
        //     'ecg' => '120', 
        // ]);
    }
}
