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
        ]);

        // uncomment to debug validation
        // dd('successful validation');

        $newuser = User::create($attributes1);

        $attributes2 = request()->validate([
            'user_id' => $newuser->id,
            'senior_name' => 'required',
            'senior_phone' => 'required',
            'senior_gender' => 'required',
            'senior_address' => 'required',
            'senior_birthdate' => 'required',
        ]);

        // uncomment to debug validation
        // dd('successful validation');

        Senior::create($attributes2);

        return redirect('home');
    }
}
