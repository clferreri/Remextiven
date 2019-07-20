<?php



Route::get('/', function(){
    return view('nosotros');
});


Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/registro', function(){
    return view('register.registerPersona');
})->name('registro');



Route::get('/prueba/{nombre}', function($nombre){
    return  "hola";
})->where('nombre', '[A-Za-z]+');

Route::get('nosotros', function(){
    return view('nosotros');
});

Route::get('confirmRegister', function(){
    return view('emails.confirmarRegistro');
});

Route::get('registroPersona', function(){
    return view('register.registerConfirmation');
});



/*
|======================================================
|========           EJEMPLOS Y DATOS            =======
|======================================================
|
|Aqui se expondran datos y cosas que pueden ser de utilidad para las rutas

----------------------------------------------------------------------------
Retornar vistas directamente o enviar parametros a ellas
===========================================================================
Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

PARAMETROS A VISTA:
Route::get('/prueba/{nombre}', function($nombre){
    return  view('HederAndFooter', ['nombre' => $nombre]);
})->where('nombre', '[A-Za-z]+');
----------------------------------------------------------------------------------------

PONERLE NOMBRE A LAS RUTAS PARA REDIRIGIR A ELLAS, es mejor, me facilita el mantenimiento de codigo a futuro

Route::get('/prueba/{nombre}', function($nombre){
    return  view('HederAndFooter', ['nombre' => $nombre]);
})->name('nobreDeRuta'); 



PASAR EL ARRAY ASOCIATIVO
Route::get('/nosotros', function(){
    $equipo = ['ignacio', 'Pepito', 'Pedrito'];
    return view('nosotros', ['equipo'=>$equipo]);
})->name('nosotros');




*/