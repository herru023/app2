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
    return view('auth.login');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/suratmasuk', 'AdminController@suratmasuk')->name('suratmasuk');
Route::get('/suratkeluar', 'AdminController@suratkeluar')->name('suratkeluar');
Route::get('/cutitahunan', 'AdminController@cuti')->name('cuti');
Route::get('/rekap', 'AdminController@rekap')->name('rekap');
Route::get('/agendacamat', 'AdminController@agendacamat')->name('agendacamat');
Route::get('/rekap/suratmasuk', 'AdminController@indexsm')->name('indexsm');
Route::get('/rekap/suratkeluar', 'AdminController@indexsk')->name('indexsk');
Route::get('/rekap/jadwalcamat', 'AdminController@indexjcamat')->name('indexjcamat');
Route::get('/rekap/cutitahunan', 'AdminController@indexc')->name('indexc');

Route::post('simpansm','AdminController@simpansm')->name('simpansm');
Route::post('simpansk','AdminController@simpansk')->name('simpansk');
Route::post('simpanac','AdminController@simpanac')->name('simpanac');
Route::post('simpanc','AdminController@simpanc')->name('simpanc');

Route::get('/rekap/suratkeluar/', 'AdminController@indexsk')->name('indexsk');
