<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/cadastrar', function () {
    return view('cadastre_se');
})->name('cadastrar');
Route::get('/add_evento', function () {
    return view('add_evento');
})->name('add_evento');
Route::get('/mostrar_evento', function () {
    return view('mostrar_evento');
})->name('mostrar_evento');

Route::post('/enviar', function (Request $request) {
   echo"<pre>";
    print_r($request->input());
})->name('post');
