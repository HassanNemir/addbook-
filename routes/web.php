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

Route::get('/', "manager@view")->name('home');
Route::get('/view', "manager@view");
Route::get('/add', "manager@add")->name('add');
Route::post('/add', "manager@add");
Route::get('/delete/{id}', "manager@delete");
Route::get('/modify/{id}', "manager@modify");
Route::post('/modify/{id}', "manager@modify");
