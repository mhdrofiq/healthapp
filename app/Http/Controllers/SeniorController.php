<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Senior;

class SeniorController extends Controller
{
    public function create()
    {
        return view('admin.newSeniorForm');
    }

    public function destroy(Senior $senior)
    {
        $senior->delete();
        return back();
    }
}
