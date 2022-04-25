<?php

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\json_encode;

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

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');


Route::post('/script_php', function ( Request $request) {

 $nome = $request->input('nome');
 $com = $request->input('comentario');



$comentarios = [
    ['mone' => 'Leticia Lima', 'comentario' => 'descriçao: Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptas molestiae consectetur error, laboriosam architecto doloribus ad commodi repudiandae
    consequuntur totam quas tempore reiciendis, blanditiis, delectus autem temporibus dolor'],

    ['mone' => 'Jhon Silva', 'comentario' => 'descriçao: Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptas molestiae consectetur error, laboriosam architecto doloribus ad commodi repudiandae
    consequuntur totam quas tempore reiciendis, blanditiis, delectus autem temporibus dolor'],

    ['mone' => 'Lennon Carvalho', 'comentario' => 'descriçao: Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptas molestiae consectetur error, laboriosam architecto doloribus ad commodi repudiandae
    consequuntur totam quas tempore reiciendis, blanditiis, delectus autem temporibus dolor'],
   [ 'nome' => $nome, 'comentario' => $com]
];







$comentarios = json_encode($comentarios);

     echo $comentarios;
})->name('script_php');

Route::post('/enviar', function (Request $request) {
   echo"<pre>";
    print_r($request->input());
})->name('post');
