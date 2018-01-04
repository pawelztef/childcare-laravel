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
Auth::routes();
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('admin/register');

Route::get('/', function () {
  return view('layouts/front_layout');
});

Route::get('/admin/dashboard', 'DashboardController@index');
Route::resource('admin/users', 'UsersController');

