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

// Route::get('/example/class-extends', function () {
//     return view('welcome');
// });






Route::get('/example/class-extends', 'ExamplesController@classExtends')->name('classExtends');


//一覧
Route::get('/', 'ModelTestController@index')->name('modelTest');

//新規登録
Route::get('/model/create', 'ModelTestController@create')->name('modelCreate');
Route::post('/model/store', 'ModelTestController@store')->name('modelStore');   //画面はなし

//修正
Route::get('/model/edit/{id}', 'ModelTestController@edit')->name('modelEdit');
Route::post('/model/update', 'ModelTestController@update')->name('modelUpdate');   //画面はなし

//削除
Route::get('/model/delete/{id}', 'ModelTestController@get_delete')->name('modelGetDelete');   //画面はなし
Route::post('/model/delete', 'ModelTestController@delete')->name('modelDelete');   //画面はなし

// Route::get('/model/copy/{id}', 'ModelTestController@get_delete')->name('modelGetDelete');   //画面はなし
Route::post('/model/copy', 'ModelTestController@copy')->name('modelDelete');   //画面はなし
