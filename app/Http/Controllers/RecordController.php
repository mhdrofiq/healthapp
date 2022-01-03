<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Heartrate;
use App\Models\senior;
use App\Models\SensorData;

class RecordController extends Controller
{
    public function index($id)
    {
        $senior = senior::where('id', $id)->first();
        $heartRate = SensorData::where('device_id', $id)->orderBy('record_time')->get();
        
        $bpm = [];
        $recordTime = [];

        foreach($heartRate as $heartRates){
            $bpm[] = $heartRates->heartrate;
            $recordTime[] = $heartRates->record_time;
        }

        return view('record', [
            "yValues" => json_encode($bpm),
            "xValues" => json_encode($recordTime),
            "senior" => $senior
        ]);
    }
}
