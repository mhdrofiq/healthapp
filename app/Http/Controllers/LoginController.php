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
    public function create(){
        return view('login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::whereEmail($request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);

                return redirect('home')->with('success', 'Login Successfully');
            }
        }
        else{
            return back()->with('error', 'Login failed');
        }
    }
}
