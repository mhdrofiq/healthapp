<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Senior;

class RegisterController extends Controller
{
    public function create()
    {
        //dont forget to change template to register
        return view('register');
    }

    public function store()
    {
        $attributes1 = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'password' => 'required|min:6',
            'senior_name' => 'required',
            'senior_phone' => 'required',
            'senior_gender' => 'required',
            'senior_address' => 'required',
            'senior_birthdate' => 'required',
        ]);

        //var_dump(request()->all());
        //$data = request()->all;

        //uncomment to debug validation
        //dd('successful validation');

        $user = User::create(request([
            'name', 
            'email', 
            'phone', 
            'gender',
            'address',
            'birthdate',
            'password',
        ]));

        $user->save();

        $senior = Senior::create(request([
            'user_id' => $user->id,
            'senior_name',
            'senior_phone', 
            'senior_gender',
            'senior_address',
            'senior_birthdate',
        ]));

        $senior->save();

        // $attributes2 = request()->validate([
        //     'user_id' => $newuser->id,
            
        // ]);

        // //dd('successful validation');
        // Senior::create($attributes2);

        return redirect('home');
    }
}
