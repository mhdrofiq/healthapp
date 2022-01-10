<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //to login a caretaker
    public function create()
    {
        return view('login');
    }

    //to login a caretaker
    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //ddd($attributes);

        if(auth()->attempt($credentials))
        {
            //redirect with a success flash message
            return redirect('home')->with('success', 'Welcome Back!');
        }
        //if the auth failed
        throw ValidationException::withMessages([
            'errormsg' => 'Your email or password is invalid'
        ]);

    }
}
