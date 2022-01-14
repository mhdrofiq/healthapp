<?php

namespace App\Http\Controllers;

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
        //     'recordtime' => '2021-10-14 23:46:00',
        //     'temperature' => '35',
        //     'ecg' => '79', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('1')->push([
        //     'recordtime' => '2021-10-14 23:46:00',
        //     'temperature' => '34',
        //     'ecg' => '80', 
        // ]);

        // $device_ref = $database->getReference('devices')->getChild('2')->push([
        //     'recordtime' => '2021-10-14 23:46:00',
        //     'temperature' => '33',
        //     'ecg' => '77', 
        // ]);
    }
}
