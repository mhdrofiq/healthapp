<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifMail;
use App\Models\senior;
use Exception;

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
            include('dbcon.php');

            try
            {
                $seniorList = senior::where('user_id', Auth::id())->get();
                foreach($seniorList as $senior)
                {
                    $did = $senior->device->id;
                    $reference = $database->getReference('devices')->getChild($did)->orderByKey()->limitToLast(1);
                    $records = $reference->getValue();
                    $record = array_values($records)[0];
                    
                    if(($record['temperature'] > 37.0 || $record['temperature'] < 34) ||
                        ($record['ecg'] > 100 || $record['ecg'] < 80))
                    {
                        //$this->sendMail(auth()->user()->email);
                        //$this->sendEmail('rofiqurrahman@graduate.utm.my');
                    }
                }
            }
            catch(Exception $e){}            

            //redirect with a success flash message
            return redirect('home')->with('success', 'Welcome Back!');
        }
        //if the auth failed
        throw ValidationException::withMessages([
            'errormsg' => 'Your email or password is invalid'
        ]);
    }

    public function sendEmail($email)
    {
        Mail::to($email)->send(new NotifMail());
 
        // if (Mail::failures()) { 
        //     return response()->Fail('Sorry! Please try again latter');
        // }else{
        //     return response()->success('Great! Successfully send in your mail');
        // }
    }
}
