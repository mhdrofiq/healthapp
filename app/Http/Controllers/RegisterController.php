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
}
