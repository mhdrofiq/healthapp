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
}
