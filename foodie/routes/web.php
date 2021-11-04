<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function(\Illuminate\Http\Request $request) {
    $foods = \App\Models\Food::$data;
    return view('foodie-list')->with('foods', $foods);
})->name('index');

Route::get('/{id}', function(\Illuminate\Http\Request $request,$id) {
    $food = \App\Models\Food::$data[$id];
    return view('foodie-detail')->with('food', $food);
})->name('detail');

