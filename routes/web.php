<?php

use Illuminate\Support\Facades\Route;


Route::get('/registration', ['as'=>'registration.index', 'uses'=>'RegController@index']);
Route::post('/registration', 'RegController@insert');



Route::get('/login', ['as'=>'login.index', 'uses'=>'LoginController@index']);
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

//=========================================================================================

Route::group(['middleware'=>['sess']] , function(){
	
    Route::get('/home', 'HomeController@index');
	Route::get('/user/list', 'UserController@index')->name('user.index');
	Route::get('/user/details/{id}', 'UserController@details')->name('user.details');

    Route::group(['middleware'=>['type']] , function(){
        Route::get('/user/create', 'UserController@create')->name('user.create');
        Route::post('/user/create', 'UserController@insert');
        Route::get('/user/edit/{id}', 'UserController@edit');
        Route::post('/user/edit/{id}', 'UserController@update');
        Route::get('/user/delete/{id}', 'UserController@delete');
        Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.delete');

//======================================================================================

        Route::resource('/product', 'ProductController');
    });
});

