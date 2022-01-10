<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //to log out the caretaker
    public function destroy()
    {
        //ddd('this is destroy');
        auth()->logout();
        return redirect('/')->with('success', 'See you again!');
    }
}
