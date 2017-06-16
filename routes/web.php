<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('about', 'AboutController', ['only' => ['index']]);
Route::resource('promotions', 'PromotionController', ['only' => ['index']]);
Route::resource('products', 'ProductController', ['only' => ['index', 'show']]);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
    {
        Route::resource('products', 'ProductController');
    });
