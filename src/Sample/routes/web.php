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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/example/class-extends', function () {
    return view('welcome');
});

Route::get('/example/class-extends', 'ExamplesController@classExtends')->name('classExtends');
Route::get('/', 'ModelTestController@index')->name('modelTest');

Route::get('/model/create', 'ModelTestController@create')->name('modelCreate');
Route::post('/model/store', 'ModelTestController@store')->name('modelStore');
Route::post('/model/update', 'ModelTestController@update')->name('modelUpdate');

Route::get('/model/edit/{id}', 'ModelTestController@edit')->name('modelEdit');
