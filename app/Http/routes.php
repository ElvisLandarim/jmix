<?php


/*
 * Autenticadores
 */
//Logar
Route::get('auth/login', [
   'as' => 'login', 'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('auth/login', [
   'as' => 'login', 'uses' => 'Auth\AuthController@postLogin'
]);
//Deslogar
Route::get('auth/logout', [
   'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout'
]);
/*
 * End Autenticadores
 */


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');