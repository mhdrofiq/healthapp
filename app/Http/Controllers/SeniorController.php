<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Senior;
use App\Models\Heartrate;

class SeniorController extends Controller
{
    public function create()
    {
        return view('admin.newSeniorForm');
    }

    public function evaluateView()
    {
        return view('evaluate');
    }

    public function store()
    {
        $newsenior = request()->validate([
            'senior_name' => 'required',
            'senior_phone' => 'required',
            'senior_gender' => 'required',
            'senior_address' => 'required',
            'senior_birthdate' => 'required',
        ]);

        if(Senior::create($newsenior))
        {
            //redirect with a success flash message
            return redirect('manageSeniors');
        }
        //if failed
        throw ValidationException::withMessages([
            'errormsg' => 'invalid input, try again'
        ]);
    }

    public function edit(Senior $senior)
    {
        return view('admin.editSenior', [
            'senior' => $senior,
        ]);
    }

    public function update(Senior $senior)
    {
        $attributes = request()->validate([
            'senior_name' => 'required',
            'senior_phone' => 'required',
            'senior_gender' => 'required',
            'senior_address' => 'required',
            'senior_birthdate' => 'required',
        ]);

        $senior->update($attributes);

        return redirect('manageSeniors');

    }

    public function destroy(Senior $senior)
    {
        $senior->delete();
        return back();
    }

        public function index($id)
        {
            include('dbcon.php');

            $key = 0;
            $reference = $database->getReference('/devices')->getChild($key);
            $records = $reference->getValue();
    
            //ddd($records);
    
            return view('record', [
                "records" => $records,
            ]);


            // $senior = senior::where('id', $id)->first();
            // $heartRate = Heartrate::where('senior_id', $id)->orderBy('recordtime_hr')->get();
            
            // $bpm = [];
            // $recordTime = [];

            // foreach($heartRate as $heartRates){
            //     $bpm[] = $heartRates->bpm;
            //     $recordTime[] = $heartRates->recordtime_hr;
            // }

            // return view('record', [
            //     "yValues" => json_encode($bpm),
            //     "xValues" => json_encode($recordTime),
            //     "senior" => $senior
            // ]);
        }
}
