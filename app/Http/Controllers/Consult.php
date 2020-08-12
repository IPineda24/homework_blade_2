<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Consult extends Controller
{
    public function exercise1()
    {
        $exercise1 = DB::table('cities')
            ->select('name')
            ->orderBy('name', 'asc')
            ->get();

        echo "NOMBRES";
        echo "<br>";
        foreach ($exercise1 as $item) {
            echo $item->name;
            echo "<br>";
        }
    }

    //exercise 2

    public function exercise2()
    {
        $exercise2 = DB::table('cities')
            ->select('name')
            ->orderBy('name', 'desc')
            ->get();

        echo "NOMBRES";
        echo "<br>";
        foreach ($exercise2 as $item) {
            echo $item->name;
            echo "<br>";
        }
    }

    //exercise 3

    public function exercise3()
    {

        $exercise3 = DB::table('countries')
            ->select('name', 'name_en')
            ->orderBy('name', 'asc')
            ->orderBy('name_en', 'asc')
            ->get();

        echo "NOMBRES/NOMBRES EN INGLES";
        echo "<br>";
        foreach ($exercise3 as $item) {
            echo "$item->name / $item->name_en";
            echo "<br>";
        }
    }

    //exercise 4


    public function exercise4()
    {
        $exercise4 = DB::table('cities')
            ->select(DB::raw('*'))
            ->where('name', 'like', 'San %')
            ->get();

        echo "NOMBRES DE CIUDAD";
        echo "<br>";
        foreach ($exercise4 as $item) {
            echo $item->name;
            echo "<br>";
        }
    }

    //exercise 5


    public function exercise5()
    {
        $exercise5 = DB::table('countries')
            ->select('id')
            ->where('name', '=', 'Guatemala')
            ->get();


        echo "ID DEL PAIS DE GUATEMALA  <br>";
        foreach ($exercise5 as $item) {
            echo $item->id;
            echo "<br>";
        }
    }

    //exercise 6


    public function exercise6()
    {
        $exercise6 = DB::table('states')
            ->select('name')
            ->where('country_id', '=', 70)
            ->orderBy('name', 'asc')
            ->get();


        echo "ESTADOS DE GUATEMALA  <br>";
        foreach ($exercise6 as $item) {
            echo $item->name;
            echo "<br>";
        }
    }

    //exercise 7


    public function exercise7()
    {
        $exercise7 = DB::table('students')
            ->select(DB::raw('email,primer_nombre as name, primer_apellido as lastname'))
            ->where('teléfono', 'like', '6%')
            ->get();

        echo "EMAIL______/______ NAME  <br><br>";
        foreach ($exercise7 as $item) {
            echo "$item->email   /   $item->name   $item->lastname";
            echo "<br>";
        }
    }

    //exercise 8


    public function exercise8()
    {
        $exercise8 = DB::table('students')
            ->select(DB::raw('count(*) as student_count'))
            ->where('carrera', 'like', 'Ingenieria%')
            ->get();

        echo "TOTAL <br>";
        foreach ($exercise8 as $item) {
            echo "$item->student_count";
            echo "<br>";
        }
    }

    //exercise 9


    public function exercise9()
    {
        $exercise9 = DB::table('students')
            ->select(DB::raw('primer_nombre as name1,segundo_nombre as name2,primer_apellido as lname,segundo_apellido as lname2,nota_paes as nota'))
            ->where('carrera', 'like', 'Ingenieria%')
            ->whereBetween('ano_ingreso', [200, 2010])
            ->get();

        echo "________NAME__________ SCORE <br><br>";
        foreach ($exercise9 as $item) {
            echo "$item->name1  $item->name2   $item->lname  $item->lname2 = $item->nota";
            echo "<br>";
        }
    }

    //exercise 10



    public function exercise10()
    {

        $exercise10 = DB::table('students')
            ->select(DB::raw('AVG(nota_paes) as promedio'))
            ->get();
        echo "PROMEDIO PAES <br><br>";
        foreach ($exercise10 as $item) {
            echo $item->promedio;
            echo "<br>";
        }
    }

    //exercise 11

    public function exercise11()
    {
        $exercise11 = DB::table('students')
            ->select(DB::raw('AVG(nota_admision) as promedio'))
            ->get();


        echo "PROMEDIO NOTA ADMISION <br><br>";
        foreach ($exercise11 as $item) {
            echo $item->promedio;
            echo "<br>";
        }
    }

    //exercise 12


    public function exercise12()
    {
        $exercise12 = DB::table('students')
            ->select(DB::raw("avg(nota_paes+nota_admision)/2 as promedio"))
            ->groupBy('primer_nombre')
            ->orderBy('promedio', 'asc')
            ->get();

        echo "PROMEDIO DE NOTA PAES Y ADMISION <br><br>";
        foreach ($exercise12 as $item) {
            echo $item->promedio;
            echo "<br>";
        }
    }

    //exercise 13


    public function exercise13()
    {
        $exercise13 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'teléfono', 'nota_paes')
            ->orderBy('nota_paes', 'desc')
            ->limit(20)
            ->get();

        echo "NAME___|___NUMBER_|SCORE <br><br>";
        foreach ($exercise13 as $item) {
            echo "$item->primer_nombre  $item->primer_apellido |  $item->teléfono | $item->nota_paes ";
            echo "<br>";
        }
    }

    //exercise 14


    public function exercise14()
    {
        $exercise14 = DB::table('students')
            ->select('carrera')
            ->addSelect(DB::raw("avg(nota_admision) as 'promedio'"))
            ->groupBy('carrera')
            ->get();

        echo "CARREER / SCORE <br><br>";
        foreach ($exercise14 as $item) {
            echo "$item->carrera / $item->promedio ";
            echo "<br>";
        }
    }

    //exercise 15


    public function exercise15()
    {
        $exercise15 = DB::table('students')
            ->select('ano_ingreso')
            ->addSelect(DB::raw("count(ano_ingreso) as cantidad"))
            ->groupBy('ano_ingreso')
            ->orderBy('ano_ingreso')
            ->get();


        foreach ($exercise15 as $item) {
            echo "$item->cantidad personas ingresaron en $item->ano_ingreso ";
            echo "<br>";
        }
    }

    //exercise 16


    public function exercise16()
    {
        $exercise16 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'nota_paes')
            ->where('nota_paes', '<', 6)
            ->get();


        foreach ($exercise16 as $item) {
            echo " $item->primer_nombre  $item->primer_apellido reprobo PAES con: $item->nota_paes ";
            echo "<br>";
        }
    }

    //exercise 17


    public function exercise17()
    {
        $exercise17 = DB::table('students')
            ->select('primer_nombre', 'primer_apellido', 'nota_paes', 'nota_admision')
            ->where('nota_paes', '<', 6)
            ->where('nota_admision', '<', 6)
            ->get();


        foreach ($exercise17 as $item) {
            echo "$item->primer_nombre  $item->primer_apellido reprobo PAES y ADMISION con notas de: paes = $item->nota_paes / admision = $item->nota_admision";
            echo "<br>";
        }
    }

    //exercise 18


    public function exercise18()
    {
        $exercise18 = DB::table('students')
            ->select('carrera')
            ->addSelect(DB::raw("min(nota_admision) as slowest_score"))
            ->groupBy('carrera')
            ->orderBy('slowest_score', 'ASC')
            ->get();


        foreach ($exercise18 as $item) {
            echo " el score mas bajo de la carrea $item->carrera fue de : $item->slowest_score";
            echo "<br>";
        }
    }

    //exercise 19


    public function exercise19()
    {
        $exercise19 = DB::table('students')
            ->select('carrera')
            ->addSelect(DB::raw("max(nota_paes) as top_score"))
            ->where('nota_paes', '>', 7)
            ->groupBy('carrera')
            ->orderBy('top_score', 'desc')
            ->get();

        foreach ($exercise19 as $item) {
            echo " el score mas alto de la carrea $item->carrera fue de : $item->top_score";
            echo "<br>";
        }
    }

    //exercise 20


    public function exercise20()
    {
        $exercise20 = DB::table('students')
            ->select(DB::raw('*'))
            ->where('primer_apellido', 'like', 'A%')
            ->where('email', 'LIKE', '%@gmail.com')
            ->whereRaw('(nota_paes+nota_admision)>=11')
            ->orderBy('primer_apellido')
            ->orderBy('segundo_apellido')
            ->get();

        foreach ($exercise20 as $item) {
            print_r($item);
            echo "<br>";
        }
    }

    //exercise 21


    public function exercise21()
    {
        $exercise21 = DB::table('countries')
            ->select('id', 'name')
            ->whereIn('name', ['Honduras', 'Guatemala', 'El Salvador', 'Nicaragua', 'Belice', 'Costa Rica', 'Panama'])
            ->get();

        foreach ($exercise21 as $item) {
            echo "$item->name $item->id";
            echo "<br>";
        }
    }

    //exercise 22


    public function exercise22()
    {
        $exercise22 = DB::table('states')
            ->select('country_id')
            ->addSelect(DB::raw("count('country_id') as cantidad"))
            ->whereIn('country_id', [30, 154, 70, 90, 99, 4, 159])
            ->groupBy('country_id')
            ->get();

        foreach ($exercise22 as $item) {
            echo "$item->country_id = $item->cantidad estados ";
            echo "<br>";
        }
    }

    //exercise 23


    public function exercise23()
    {
        $exercise23 = DB::table('states')
            ->select('id', 'name')
            ->where('country_id', 90)
            ->get();

        foreach ($exercise23 as $item) {
            echo "$item->id = $item->name ";
            echo "<br>";
        }
    }

    //exercise 24


    public function exercise24()
    {
        $exercise24 = DB::table('cities')
            ->select('state_id')
            ->addSelect(DB::raw("COUNT('id') as total"))
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->groupBy('state_id')
            ->get();

        foreach ($exercise24 as $item) {
            echo "$item->state_id = $item->total municipios ";
            echo "<br>";
        }
    }

    //exercise 25


    public function exercise25()
    {
        $exercise25 = DB::table('cities')
            ->select('state_id', 'name')
            ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
            ->orderBy('state_id')
            ->get();

        foreach ($exercise25 as $item) {
            echo "$item->state_id / $item->name ";
            echo "<br>";
        }
    }
}
