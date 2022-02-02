<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Validation\ValidationException;
use App\Models\senior;
use Exception;

class SeniorController extends Controller
{
    public function create()
    {
        return view('admin.newSeniorForm');
    }

    public function evaluateView(senior $senior)
    {
        include('dbcon.php');
        try
        {
            $did = $senior->device->id;
            //get the latest temperature reading from device where device id == $did
            $reference = $database->getReference('devices')->getChild($did)->orderByKey()->limitToLast(3);
            $records = $reference->getValue();
    
            //ddd($records);
    
            $statusflag;
            $tempflag;
            $heartflag;
    
            foreach($records as $record)
            {
                if($record['temperature'] < 35)
                {
                    $statusflag = false;
                    $tempflag = false;
                }
                else if($record['temperature'] >= 39.0)
                {
                    $statusflag = false;
                    $tempflag = false;
                }
    
                if($record['ecg'] < 60)
                {
                    $statusflag = false;
                    $heartflag = false;
                }
                else if($record['ecg'] > 100)
                {
                    $statusflag = false;
                    $heartflag = false;
                }
            }
    
            return view('evaluate', [
                'records' => $records,
                'statusflag' => $statusflag,
                'tempflag' => $tempflag,
                'heartflag' => $heartflag,
                'senior' => $senior,
            ]);
        }
        catch(Exception $e)
        {
            return view('noevaluate', [
                'senior' => $senior,
            ]);
        }
        
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

            try
            {
                $grandChildKey = $database->getReference('devices')->getChild($device->id)->getChildKeys();

                $temp = [];
                $bpm = [];
                $recordTime = [];
                foreach($grandChildKey as $grandChildKeys){
                    $temp[] = $database->getReference('devices/'.$device->id.'/'.$grandChildKeys.'/temperature')->getValue();
                    $bpm[] = $database->getReference('devices/'.$device->id.'/'.$grandChildKeys.'/ecg')->getValue();
                    $recordTime[] = $database->getReference('devices/'.$device->id.'/'.$grandChildKeys.'/recordtime')->getValue();
                }
    
                //this is to get a collection of records from a device
                $reference = $database->getReference('devices')->getChild($device->id)->orderByKey();
                $records = $reference->getValue();
        
                //ddd($records);

                return view('record', [
                    "yValues" => json_encode($bpm),
                    "xValues" => json_encode($recordTime),
                    "senior" => $senior,
                    "records" => $records,
                    "yVal" => json_encode($temp),
                ]);
            }
            catch(Exception $e)
            {
                return view('nodevice', [
                    "senior" => $senior,
                ]);
            }
            
        }
}
