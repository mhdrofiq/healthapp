<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Heartrate;
use App\Models\senior;


class RecordController extends Controller
{
    public function index($id)
    {
        $senior = senior::where('id', $id)->first();
        $heartRate = Heartrate::where('senior_id', $id)->orderBy('recordtime_hr')->get();
        
        $bpm = [];
        $recordTime = [];

        foreach($heartRate as $heartRates){
            $bpm[] = $heartRates->bpm;
            $recordTime[] = $heartRates->recordtime_hr;
        }

        return view('record', [
            "yValues" => json_encode($bpm),
            "xValues" => json_encode($recordTime),
            "senior" => $senior
        ]);
    }
}
