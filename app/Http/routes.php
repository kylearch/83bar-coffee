<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () { return view('welcome'); });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'CoffeeController@calendar']);
    Route::get('coffee', ['as' => 'coffee.index', 'uses' => 'CoffeeController@index']);
    Route::get('coffee/dates', ['as' => 'coffee.dates', 'uses' => 'CoffeeController@dates']);
    Route::get('coffee/rate', ['as' => 'coffee.rate', 'uses' => 'CoffeeController@getRate']);
    Route::post('coffee/rate', ['as' => 'coffee.rate', 'uses' => 'CoffeeController@postRate']);
    Route::get('coffee/add', ['as' => 'coffee.add', 'uses' => 'CoffeeController@add']);
    Route::post('coffee/add', ['as' => 'coffee.store', 'uses' => 'CoffeeController@store']);
    Route::get('coffee/{coffee_id}/edit', ['as' => 'coffee.edit', 'uses' => 'CoffeeController@edit']);
    Route::put('coffee/{coffee_id}/update', ['as' => 'coffee.update', 'uses' => 'CoffeeController@update']);
});
