<?php

Route::get('/', function () {
   //return 'Home';
   return view('auth.login');
});

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('libro', 'LibroController');

Route::get('/libro', 'LibroController@index')
    ->name('libro.index');

Route::resource('pedido', 'PedidosController');

Route::get('/pedido', 'PedidosController@index')
    ->name('pedido.index');