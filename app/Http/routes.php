<?php


//Site

Route::get('/', function () {
    return view('site.index');
});


//Autendicadores
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


/*
 * Administração
 */
Route::group(['middleware' => 'auth'], function () {

    Route::get('admin/index', [
        'as' => 'admin', 'uses' => 'Admin\HomeController@index'
    ]);

    //Clientes
    Route::get('admin/clientes', [
        'as' => 'clientes', 'uses' => 'Admin\ClienteController@index'
    ]);
    Route::get('admin/clientes/create', [
        'as' => 'cadastro-cliente', 'uses' => 'Admin\ClienteController@create'
    ]);


    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});
/*
 * End Administração
 */

//Site
//Registro de cliente
Route::get('site/register', [
    'as' => 'register', 'uses' => 'Site\RegistroController@index'
]);

