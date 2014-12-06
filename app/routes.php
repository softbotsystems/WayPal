<?php

Route::get('/', 'HomeController@index');

Route::get('auth', 'HomeController@getLogin');
Route::post('auth', 'HomeController@postLogin');
Route::get('authOut', 'HomeController@getLogout');
Route::get('register', 'UserController@create');
Route::post('register', 'UserController@store');
Route::get('complains', 'ComplainController@home');
Route::get('complains/list', 'ComplainController@listAll');
Route::get('maps', 'HomeController@maps');
Route::get('routes', 'HomeController@routes');

Route::group(array('before' => 'auth'), function()
{
    Route::get('home', 'HomeController@home');
    Route::get('complains/create', 'ComplainController@create');
    Route::post('complains', 'ComplainController@store');
});