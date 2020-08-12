<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ex_01;
use App\Http\Controllers\ex_02;
use App\Http\Controllers\ex_03;
use App\Http\Controllers\ex_04;
use App\Http\Controllers\ex_05;
use App\Http\Controllers\ex_06;
use App\Http\Controllers\ex_07;
use App\Http\Controllers\ex_08;


use App\Http\Controllers\Result_01;
use App\Http\Controllers\Result_02;
use App\Http\Controllers\Result_03;
use App\Http\Controllers\Result_05;
use App\Http\Controllers\Result_06;
use App\Http\Controllers\Result_07;
use App\Http\Controllers\Result_08;
use App\Http\Controllers\Consult;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('exercise')->name('exercise.')->group(function () {
    Route::get('01', [ex_01::class, 'classone'])->name('a');
    Route::get('02', [ex_02::class, 'class_two'])->name('b');
    Route::get('03', [ex_03::class, 'class_three'])->name('c');
    Route::get('04', [ex_04::class, 'class_four'])->name('d');
    Route::get('05', [ex_05::class, 'class_five'])->name('e');
    Route::get('06', [ex_06::class, 'class_six'])->name('f');
    Route::get('07', [ex_07::class, 'class_seven'])->name('g');
    Route::get('08', [ex_08::class, 'class_eight'])->name('h');
});


Route::prefix('result')->name('Result.')->group(function () {
    Route::post('01', [Result_01::class, 'class_one'])->name('a');
    Route::post('02', [Result_02::class, 'class_two'])->name('b');
    Route::post('03', [Result_03::class, 'class_three'])->name('c');
    Route::post('05', [Result_05::class, 'class_five'])->name('e');
    Route::post('06', [Result_06::class, 'class_six'])->name('f');
    Route::post('07', [Result_07::class, 'class_seven'])->name('g');
    Route::post('08', [Result_08::class, 'class_eight'])->name('h');
});

//nueva tarea de consultas 
Route::prefix('exercise')->name('exercise.')->group(function () {
    for ($i = 1; $i <= 25; $i++) {
        Route::get($i, [Consult::class, 'exercise' . $i])->name('consult');
    }
});
