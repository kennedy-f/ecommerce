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


Route::get('/loadmin', function () {
    return view('admin.pages.login.login');
});
Route::get('/cliadmin', function () {
    return view('site.pages.login.accounts');
});


Route::get('/', 'Site\DashboardController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();
Route::group([
    'prefix' => 'admin',
    'name' => 'admin',
    'namespace' => 'Admin',
], function () {
    
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
    Route::resource('client', 'ClientController');
});


