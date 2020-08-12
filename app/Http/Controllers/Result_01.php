<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_01 extends Controller
{
    public function class_one(Request $request)
    {
        return view(
            'result/01result',['cont'=> $request->cont]
        );
    }
}


