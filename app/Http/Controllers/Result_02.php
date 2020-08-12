<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_02 extends Controller
{
    public function class_two(Request $request)
    {
        $mayus=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $minus=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];
        $array= str_split($request->word);
        $new=[];
    for ($i=0; $i <count($array) ; $i++) { 
        for ($o=0; $o <27 ; $o++) { 
            if ($array[$i]==$mayus[$o]) {
                array_push($new,$minus[$o]);
               }elseif ($array[$i]==$minus[$o]) {
                   array_push($new, $mayus[$o]);
               }
        }
      
    }
        return view('result/02result',['word'=>$new,'nw'=>$array] );
    }
}
