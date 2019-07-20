<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/pruebaApi', function(){
    return view('emails.confirmarRegistro');
});


Route::get('/mail','PagesController@hagamoslo');



Route::get('/ajugar', function(){
    return  "Vamos a jugar, con la pi que esta aqui!";
});
