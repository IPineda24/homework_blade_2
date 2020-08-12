<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_08 extends Controller
{
 public function class_eight(Request $request)
 {
  
 return view('result/08result',['num1'=>$request->number1,'num2'=>$request->number2]);
 }
}
