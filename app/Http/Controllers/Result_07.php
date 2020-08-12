<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Result_07 extends Controller
{
public function class_seven(Request $request)
{
    $books=["Guerra y Paz – León Tolstoi",
    "El retrato de Dorian Gray – Oscar Wilde",
    "El nombre de la rosa – Umberto Eco",
    "La casa de los espíritus – Isabel Allende",
    "El Alquimista – Paulo Coelho",
    "El arte de la guerra – Sun Tzu",
    "El guardián entre el centeno – J.D. Salinger",
    "100 AÑOS DE SOLEDAD – GABRIEL GARCÍA MÁRQUEZ",
    "CRIMEN Y CASTIGO – FIÓDOR DOSTOYEVSKI",
    "ORGULLO Y PREJUICIO – JANE AUSTEN",
    "EL SEÑOR DE LOS ANILLOS -J.R.R. TOLKIEN",
    "DON QUIJOTE DE LA MANCHA – MIGUEL DE CERVANTES",
    "EL PRINCIPITO – ANTOINE DE SAINT-EXUPÉRY",
    "EL GRAN GATSBY – F."
    ];
    
$RanNum =[];
$n = 0;
while ($n<$request->number) {
    $numALE = rand(0,13);
    if (!in_array($numALE,$RanNum )) {
      array_push($RanNum ,$numALE);
      $n++;
    }
  }

$toRead=[];
$notRead=$books;
for ($i=0; $i <$request->number ; $i++) { 
        if ($books[$RanNum[$i]]==$books[$RanNum[$i]]) {
            array_push($toRead ,$books[$i]);
            unset($notRead[$i]);
    }

 }

 
return view('result/07result',['sread'=>$toRead,'noread'=>$notRead]);

 }
}
