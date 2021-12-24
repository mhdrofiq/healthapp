<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function home()
    {
        return view('adminHome');
    }

    public function create()
    {
        return view('adminLogin');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|exists:admins',
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
            'username' => 'Your provided credentials could not be verified'
        ]);
    }

    public function destroy()
    {
        //ddd('this is destroy');
        auth()->guard('admin')->logout();
        return redirect('adminLogin')->with('success', 'Goodbye!');
    }
}
