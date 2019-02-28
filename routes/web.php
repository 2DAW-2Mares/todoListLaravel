<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('todos/create', function()
    {
        return view('todos.create');
    });

    Route::post('todos/create', 'TodosController@postCreate');

    Route::get('todos/eventosPendientes', 'TodosController@getPendientes');

});

Route::get('/home', 'HomeController@index')->name('home');
