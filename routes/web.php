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

Route::group([
    'prefix' => 'admin',
    'name' => 'admin',
    'namespace' => 'Admin',
], function () {
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('client', 'ClientController');
});


Auth::routes();
Route::get('/', 'Site\DashboardController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
