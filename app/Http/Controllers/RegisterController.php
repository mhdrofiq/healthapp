<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        //dont forget to change template to register
        return view('register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'usertype' => 'required',
            'age'=> 'required',
            'birthdate' => 'required',
            'password' => 'required|min:6',
        ]);

        // uncomment to debug validation
        dd('successful validation');

        // User::create($attributes);

        // return redirect('home');
    }
}
