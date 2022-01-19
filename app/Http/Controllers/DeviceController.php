<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function store()
    {
        $device = new Device;
        $device->save();
        return back();
    }

    public function destroy(Device $device)
    {
        $device->delete();
        return back();
    }

    //public function getSensorData(Device $device)
    public function getSensorData()
    {
        include('dbcon.php');

        //$key = $device->id
        $key = 0;
        $reference = $database->getReference('/devices')->getChild($key);
        $records = $reference->getValue();

        //ddd($records);

        return view('template', [
            'records' => $records,
        ]);
    }
}
