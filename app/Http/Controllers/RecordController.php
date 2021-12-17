<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Heartrate;
use App\Models\senior;

class RecordController extends Controller
{
    public function heartRate()
    {
        $heartRate = Heartrate::where('senior_id', Auth::id())->orderBy('recordtime_hr')->get(); 
        $seniorName = senior::where('user_id', Auth::id())->first();
        $bpm = [];
        $recordTime = [];

        foreach($heartRate as $heartRates){
            $bpm[] = $heartRates->bpm;
            $recordTime[] = $heartRates->recordtime_hr;
        }

        return view("record", [
            "yValues" => json_encode($bpm),
            "xValues" => json_encode($recordTime),
            "seniorName" => json_encode($seniorName->senior_name),
        ]);
    }
}