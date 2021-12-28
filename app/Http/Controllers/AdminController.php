<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function homeView()
    {
        return view('admin.adminHome');
    }

    public function manageCaretakersView()
    {
        return view('admin.manageCaretakers');
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
        return redirect('adminLogin')->with('success', 'Goodbye!');
    }
}
