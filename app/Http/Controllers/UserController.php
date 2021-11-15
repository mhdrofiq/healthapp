<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    /*
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
    */
    public function home(){
        return view('home');
    }

    public function profile(){
        return view('profile');
    }

    public function evaluate(){
        return view('evaluate');
    }

    public function record(){
        return view('record');
    }

    public function abnormal(){
        return view('abnormal');
    }
}

?>