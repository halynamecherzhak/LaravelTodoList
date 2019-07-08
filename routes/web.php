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

Route::resource('task', 'TasksController');

//Route::get('/', 'TasksController@index');

Route::get('/', function (){
    return redirect()->route('task.index');
});

//method that cleanly encapsulates all the login and register routes

Auth::routes();

Route::get('/home', 'TasksController@index')->name('home');
