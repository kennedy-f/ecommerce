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

// Route::get('/', function () {
//     return view('admin/pages/dashboard');
// });
// Route::get('/', 'Admin\DashboardController@index');
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function() {
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    });
});


Auth::routes();
Route::get('/', 'Site\DashboardController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
