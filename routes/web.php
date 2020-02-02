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
Route::get('/cutitahunan', 'AdminController@cutitahunan')->name('cutitahunan');
Route::get('/rekap', 'AdminController@rekap')->name('rekap');
Route::get('/agendacamat', 'AdminController@agendacamat')->name('agendacamat');
Route::get('/suratimb', 'AdminController@suratimb')->name('suratimb');

Route::get('/rekap/suratmasuk', 'AdminController@indexsm')->name('indexsm');
Route::get('/rekap/suratkeluar', 'AdminController@indexsk')->name('indexsk');
Route::get('/rekap/jadwalcamat', 'AdminController@indexjcamat')->name('indexjcamat');
Route::get('/rekap/cutitahunan', 'AdminController@indexc')->name('indexc');
Route::get('/rekap/suratimb', 'AdminController@indexi')->name('indexi');
Route::get('/rekap/laporankasi', 'AdminController@laporankasi')->name('laporankasi');

Route::get('/print/suratmasuk', 'AdminController@printsm')->name('printsm');
Route::get('/print/suratkeluar', 'AdminController@printsk')->name('printsk');
Route::get('/print/cutitahunan', 'AdminController@printc')->name('printc');
Route::get('/print/suratimb', 'AdminController@printi')->name('printi');
Route::get('/print/agendacamat', 'AdminController@printcamat')->name('printcamat');

Route::get('/rekap/suratmasuk/edit/{id}', 'AdminController@editsm')->name('editsm');
Route::get('/rekap/suratkeluar/edit/{id}', 'AdminController@editsk')->name('editsk');
Route::get('/rekap/camat/edit/{id}', 'AdminController@editcamat')->name('editcamat');
Route::get('/rekap/cutitahunan/edit/{id}', 'AdminController@editc')->name('editc');
Route::get('/rekap/suratimb/edit/{id}', 'AdminController@editi')->name('editi');

Route::post('simpansm','AdminController@simpansm')->name('simpansm');
Route::post('simpansk','AdminController@simpansk')->name('simpansk');
Route::post('simpancamat','AdminController@simpanac')->name('simpanac');
Route::post('simpanc','AdminController@simpanc')->name('simpanc');
Route::post('simpani','AdminController@simpani')->name('simpani');

Route::post('simpaneditsm/{id}','AdminController@simpaneditsm')->name('simpaneditsm');
Route::post('simpaneditsk/{id}','AdminController@simpaneditsk')->name('simpaneditsk');
Route::post('simpaneditcamat/{id}','AdminController@simpaneditcamat')->name('simpaneditcamat');
Route::post('simpaneditc/{id}','AdminController@simpaneditc')->name('simpaneditc');
Route::post('simpanediti/{id}','AdminController@simpanediti')->name('simpanediti');

Route::delete('rekap/hapussm/{id}','AdminController@deletesm')->name('deletesm');
Route::delete('rekap/hapussk/{id}','AdminController@deletesk')->name('deletesk');
Route::delete('rekap/hapuscamat/{id}','AdminController@deletecamat')->name('deletecamat');
Route::delete('rekap/hapusc/{id}','AdminController@deletec')->name('deletec');
Route::delete('rekap/hapusi/{id}','AdminController@deletei')->name('deletei');




