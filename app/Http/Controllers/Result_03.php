<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_03 extends Controller
{
    public function class_three(request $request)
    {
        return view('result/03result',['num'=>$request->num]);
    }
}
