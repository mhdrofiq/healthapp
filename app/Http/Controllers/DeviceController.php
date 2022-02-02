<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\senior;
use Exception;


class DeviceController extends Controller
{
    public function store()
    {
        $device = new Device;
        $device->save();

        include('dbcon.php');
        //firebase doesn't allow a node that should have children be created without any children
        //so when a new device is added, set its sensor values to 0
        $device_ref = $database->getReference('devices')->getChild($device->id)->push([
            'recordtime' => 0,
            'temperature' => 0,
            'ecg' => 0,
        ]);

        //ddd($device_ref);

        return back();
    }

    public function destroy(Device $device)
    {
        $device->delete();

        include('dbcon.php');
        $database->getReference('devices')->getChild($device->id)->remove();

        return back();
    }

    //public function getSensorData(Device $device)
    // public function getSensorData()
    // {
    //     include('dbcon.php');

    //     //$key = $device->id
    //     $key = 0;
    //     $reference = $database->getReference('/devices')->getChild($key);
    //     $records = $reference->getValue();

    //     //ddd($records);

    //     return view('template', [
    //         'records' => $records,
    //     ]);
    // }

    public function viewNotifications(senior $senior)
    {
        include('dbcon.php');

        try
        {
            $did = $senior->device->id;
            //get the latest temperature reading from device where device id == $did
            $reference = $database->getReference('devices')->getChild($did)->orderByKey()->limitToLast(1);
            $records = $reference->getValue();
    
            //ddd($records);
            
            $record = array_values($records)[0];
            if(($record['temperature'] >= 39.0 || $record['temperature'] < 35) ||
                ($record['ecg'] > 100 || $record['ecg'] < 60))
            {
                return view('abnormal', [
                    'abrtemp' => $record['temperature'],
                    'abrecg' => $record['ecg'],
                    'abrtime' => $record['recordtime'],
                ]);
            }
            else
            {
                return view('normal', [
                   'senior' => $senior,
                ]);
            }
        }
        catch(Exception $e)
        {
            return view('nodevice', [
                'senior' => $senior,
            ]);
        }
        
    }    
}
