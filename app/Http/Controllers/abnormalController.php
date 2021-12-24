<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Heartrate;
use App\Models\Temperature;
use App\Models\senior;

class abnormalController extends Controller
{
    public function checkData()
    {
        // $abrtemp = Temperature::where('senior_id', Auth()->user()->senior->id);
        
        // dd($abrtemp);

        // if(Auth()->user()->senior->temperature->last() > 38)
        // {
        //     $abrtemp = Auth()->user()->senior->temperature->last();
        //     return view('abnormal', [
        //         'abrtemp' => $abrtemp
        //     ]);
        // }
        // else
        // {
        //     return view('normal');
        // }
    }
}