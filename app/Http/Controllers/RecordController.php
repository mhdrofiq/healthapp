<?php

namespace App\Http\Controllers;
use App\Models\Senior;
use App\Models\Temperature;
use App\Record;

use Illuminate\Http\Request;
use App\Charts\TemperatureChart;

class RecordController extends Controller
{
    public function Record(Request $request){
        $temp = RecordController::orderBy('created_at')->temperatures('temperature','created_at');

        $tempRate = new TemperatureChart;
        $tempRate->labels($temp->key());
        $tempRate->dataset('Tenperature','line', $temp->values());

        return view('Record', compact('tempRate'));
    }
}
