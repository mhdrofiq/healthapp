<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Senior;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function createsenior()
    {
        return view('seniorform');
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

        return redirect('addsenior');
    }

    public function storesenior(Request $request)
    {
        //to check what data is inputted
        //return request()->all();

        request()->validate([
            'senior_name' => 'required',
            'senior_phone' => 'required',
            'senior_gender' => 'required',
            'senior_address' => 'required',
            'senior_birthdate' => 'required',
        ]);

        $newsenior = Senior::create();
        $newsenior->user_id = auth()->user()->id;
        $newsenior->senior_name = $request->senior_name;
        $newsenior->senior_phone = $request->senior_phone;
        $newsenior->senior_gender = $request->senior_gender;
        $newsenior->senior_address = $request->senior_address;
        $newsenior->senior_birthdate = $request->senior_birthdate;
        $newsenior->save();

        return redirect('home');
    }
}
