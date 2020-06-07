<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','TugasController@index');
Route::post('/Tugas','TugasController@store')->name('tugas.store');
Route::get('/tugas-list','TugasController@getTugas')->name('tugas.list');
Route::delete('/Tugas/{id}','TugasController@delete')->name('tugas.delete');
Route::patch('/Tugas/{id}','TugasController@update')->name('tugas.update');
