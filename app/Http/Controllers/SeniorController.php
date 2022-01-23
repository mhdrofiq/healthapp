<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\senior;
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

        if(senior::create($newsenior))
        {
            //redirect with a success flash message
            return redirect('manageSeniors');
        }
        //if failed
        throw ValidationException::withMessages([
            'errormsg' => 'invalid input, try again'
        ]);
    }

    public function edit(senior $senior)
    {
        return view('admin.editSenior', [
            'senior' => $senior,
        ]);
    }

    public function update(senior $senior)
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

    public function destroy(senior $senior)
    {
        $senior->delete();
        return back();
    }

        public function index($id)
        {
            include('dbcon.php');

            $senior = senior::where('id', $id)->first();
            $device = Device::where('senior_id', $senior->id)->first();

            $grandChildKey = $database->getReference('devices')->getChild($device->id)->getChildKeys();

            $bpm = [];
            $recordTime = [];
            foreach($grandChildKey as $grandChildKeys){
                $bpm[] = $database->getReference('devices/'.$device->id.'/'.$grandChildKeys.'/ecg')->getValue();
                $recordTime[] = $database->getReference('devices/'.$device->id.'/'.$grandChildKeys.'/recordtime')->getValue();
            }
    
            //ddd($records);
    
            return view('record', [
                "yValues" => json_encode($bpm),
                "xValues" => json_encode($recordTime),
                "senior" => $senior,
            ]);
        }
}
