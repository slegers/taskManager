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

Route::get('/', function () {
   $side = DB::table('task')->orderBy('deadline_date')->orderBy('deadline_time')->limit(2)->get();
    return view('index',compact('side'));
});

Route::get('/add_task', 'taskController@create');
Route::get('task/overview', 'taskController@index');
Route::get('task/{id}','taskController@show');
Route::post('/task','taskController@store');
Route::get('/task/{id}/delete','taskController@destroy');
Route::get('/task/{id}/edit','taskController@edit');
Route::post('/task/{id}/update','taskController@update');