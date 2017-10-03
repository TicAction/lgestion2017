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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//section kids
Route::get('/eleve','KidController@index')->name('kid_index');
Route::get('/eleve/ajout','KidController@create')->name('kid_create');
Route::get('/eleve/{id}','KidController@show')->name('kid_show');
Route::get('/eleve/{id}/modifier','KidController@edit')->name('kid_edit');
Route::post('/eleve','KidController@store')->name('kid_store');
Route::put('/eleve/{id}','KidController@update')->name('kid_update');
Route::delete('/eleve/{id}','KidController@destroy')->name('kid_destroy');



//section behaviors
Route::get('/comportement','BehaviorController@index')->name('behavior_index');
Route::get('/comportement/ajout','BehaviorController@create')->name('behavior_create');
Route::get('/comportement/{id}','BehaviorController@show')->name('behavior_show');
Route::get('/comportement/{id}/modifier','BehaviorController@edit')->name('behavior_edit');
Route::post('/comportement','BehaviorController@store')->name('behavior_store');
Route::put('/comportement/{id}','BehaviorController@update')->name('behavior_update');
Route::delete('/comportement/{id}','BehaviorController@destroy')->name('behavior_destroy');