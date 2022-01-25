<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Temperature;
use App\Http\Controllers\senior;

class RecordController extends Controller{

public function temp(){
        $temp = Temperature::where('senior_id', Auth::id())->orderBy('recordtime_tm')->get(); 
        $sName = senior::where('user_id', Auth::id())->first();
        $temperature = [];
        $recordTime = [];

        foreach($temp as $temp){
            $temperature[] = $temp->temp;
            $recordTime[] = $temp->recordtime_tm;
        }

        return view("record", [
            "yVal" => json_encode($temperature),
            "xVal" => json_encode($recordTime),
            "sName" => json_encode($sName->senior_name),
        ]);
    }
}
