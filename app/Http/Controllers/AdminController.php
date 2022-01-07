<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use App\Models\Senior;
use App\Models\Device;

class AdminController extends Controller
{
    public function homeView()
    {        
        return view('admin.adminHome', [
            'devices' => Device::whereHas('senior', function(Builder $query){
                $query->where('user_id', '!=', 'null');
            })->get(),
        ]);
    }

    public function manageCaretakersView()
    {
        return view('admin.manageCaretakers', [
            'users' => User::all(),
        ]);
    }

    public function manageSeniorsView()
    {
        return view('admin.manageSeniors', [
            'seniors' => Senior::all(),
        ]);
    }

    public function manageDevicesView()
    {
        return view('admin.manageDevices', [
            'devices' => Device::all(),
        ]);
    }

    public function assignView()
    {
        return view('admin.assign', [
            'devices' => Device::doesntHave('senior')->get(),
            'seniorsToDevice' => Senior::doesntHave('device')->get(),
            'seniorsToUser' => Senior::doesntHave('user')->get(),
            'users' => User::all(),
        ]);
    }

    public function assignDevice()
    {
        $device_id = request()->input('selected_device');
        $senior_id = request()->input('selected_senior');

        $device = Device::find($device_id);
        $device->senior_id = $senior_id;
        $device->save();

        return redirect('adminHome');
    }

    public function assignSenior()
    {
        $senior_id = request()->input('selected_senior');
        $user_id = request()->input('selected_user');

        $senior = Senior::find($senior_id);
        $senior->user_id = $user_id;
        $senior->save();

        return redirect('adminHome');
    }

    public function editAssignment(Device $device)
    {
        return view('admin.editAssignment', [
            'seniorsToDevice' => Senior::doesntHave('device')->get(),
            'users' => User::all(),
            'selectedDevice' => $device,
        ]);
    }

    public function updateDeviceAssign(Device $device)
    {
        $newsenior = request()->input('new_senior');

        $d = Device::find($device->id);
        $d->senior_id = $newsenior;
        $d->save();

        if($d->senior_id != NULL)
        {
            return back();
        }
        else
        {
            return redirect('adminHome');
        }
    }

    public function updateSeniorAssign(Senior $senior)
    {
        $newcaretaker = request()->input('new_caretaker');
        
        $s = Senior::find($senior->id);
        $s->user_id = $newcaretaker;
        $s->save();

        if($s->user_id != NULL)
        {
            return back();
        }
        else
        {
            return redirect('adminHome');
        }
    }

    public function create()
    {
        return view('admin.adminLogin');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //based on the provided credentials
        if(auth()->guard('admin')->attempt($attributes))
        {
            //redirect with a success flash message
            return redirect('adminHome')->with('success', 'Welcome Back!');
        }
        //if the auth failed
        throw ValidationException::withMessages([
            'errormsg' => 'Your username or password is invalid'
        ]);
    }

    public function destroy()
    {
        //ddd('this is destroy');
        auth()->guard('admin')->logout();
        return redirect('adminLogin')->with('success', 'See you again!');
    }
}
