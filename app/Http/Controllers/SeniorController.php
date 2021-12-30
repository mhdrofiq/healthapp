<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniorController extends Controller
{
    public function create()
    {
        return view('admin.newSeniorForm');
    }
}
