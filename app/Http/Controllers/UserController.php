<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
    public function updateProfile()
    {
        return view('updateProfile');
        $User = Auth::user();
        $profile = User::where($User)->get();


        
    }


    public function changePassword(){
        
    }
    
}
