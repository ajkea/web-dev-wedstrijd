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
    return view('home');
});


Route::get('/concept', function () {
    return view('concept');
});

Route::get('/list', 'QuestionController@index');
Route::get('/question', 'QuestionController@create');
Route::post('/question','QuestionController@store');
Route::get('/list/delete/{user_id}','QuestionController@destroy');

Route::get('/winners', 'WinnerController@index');

// Auth::routes();