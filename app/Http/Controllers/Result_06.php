<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_06 extends Controller
{
   public function class_six(Request $request)
   {
       return view('result/06result',['num'=>$request->num]);
   }
}
