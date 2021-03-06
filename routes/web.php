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
})->name('home');

Auth::routes();

Route::group([ 'prefix' => 'administrator', 'namespace' => 'Admin'], function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('/', 'HomeController@dashboard')->name('admin.dashboard');
    Route::get('/{page}', 'HomeController@getPage')->name('admin.page');

});
