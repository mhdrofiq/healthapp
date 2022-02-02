<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        //to check what data is inputted
        //return request()->all();

        $newuser = User::create(request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'password' => 'required|min:6',
        ]));

        //uncomment to debug validation
        //dd('successful validation');

        auth()->login($newuser);

        return redirect('home');
    }

    public function storetemperature(Request $request)
    {
        //to check what data is inputted
        //return request()->all();

        request()->validate([
            'temperature' => 'required',
            'ecordtime_tm' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $newtemp = Temperature::create();
        $newtemp->senior_id = auth()->user()->id;
        $newtemp->temperature = $request->temperature;
        $newtemp->recordtime_tm = $request->recordtime_tm;
        $newtemp->created_at = $request->created_at;
        $newtemp->updated_at = $request->updated_at;
        $newtemp->save();

        return redirect('record');
    }
}
