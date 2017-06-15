<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('about', 'AboutController', ['only' => ['index']]);
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);
