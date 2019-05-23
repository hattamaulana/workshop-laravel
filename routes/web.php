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
    return view('layout.app');
});
Route::get('/crew', 'CrewController@index')->name('crew');
Route::get('/crew/create', 'CrewController@create')->name('crew.create');
Route::post('/crew/store', 'CrewController@store')->name('crew.store');
Route::get('/crew/edit/{id}', 'CrewController@edit')->name('crew.edit');
Route::post('/crew/update/{id}', 'CrewController@update')->name('crew.update');
Route::get('/crew/delete/{id}', 'CrewController@destroy')->name('crew.delete');
