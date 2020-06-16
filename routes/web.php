<?php


Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('associado', 'AssociadoController');
Route::resource('cargo', 'CargoController');
Route::resource('vinculo', 'VinculoController');
Route::resource('setor', 'SetorController');
Route::resource('regras', 'RegraController');


