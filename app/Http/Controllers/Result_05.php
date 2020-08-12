<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_05 extends Controller
{
    public function class_five (Request $request)
    {
        $frequence = explode(",", $request->texto);
        $new=array_count_values($frequence);
        return view('result/05result',['texto'=>$new]);
    }
}
