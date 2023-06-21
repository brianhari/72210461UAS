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


Route::get('/tampil', 'tbl_72210461@tampil');
Route::get('/uas', 'tbl_72210461@uas');
Route::get('/form', 'tbl_72210461@form');
Route::post('/form/process', 'tbl_72210461@proses');
