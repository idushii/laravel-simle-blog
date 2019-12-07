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
Route::get('/records', 'RecordController@index')->name('records');

Route::get ('/record/create', 'RecordController@create')->name('record.create');
Route::post('/record/create', 'RecordController@store')->name('record.store');

Route::get('/record/{record}', 'RecordController@show')->name('record.show');

Route::get('/record/{record}/edit', 'RecordController@edit')->name('record.edit');
Route::put('/record/{record}/edit', 'RecordController@update')->name('record.update');
Route::delete('/record/{record}/edit', 'RecordController@destroy')->name('record.delete');

Route::get('/restore', function () {
	/* php artisan migrate */
    \Artisan::call('migrate');
    \Artisan::call('db:seed');
    dd("Done");
});
