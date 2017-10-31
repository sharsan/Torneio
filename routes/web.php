<?php 

Route::get('/', function () {
  // return view('inicio');
    return view('home');
});

 
Route::resource('arbitro', 'ArbitroController');
Route::resource('atleta', 'AtletaController'); 
Route::resource('clube', 'ClubeController'); 
Route::resource('competicao', 'CompeticaoController'); 
Route::resource('estado', 'EstadoController'); 
Route::resource('treinador', 'TreinadorController');  
Route::resource('torneio', 'TorneioController');   
Route::resource('vencedor', 'VencedorController');  
Route::resource('usuario', 'UsuarioController');   

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('inicio', function () { 
Route::get('home', function () { 
  return view('welcome');
});

Route::get('/resultados', 'UsuarioController@resultados')->name('resultados');
Route::get('/eventos', 'UsuarioController@eventos')->name('eventos');
