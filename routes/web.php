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
//     return view('welcome');
// });
Route::get('/', 'Guest\HomeController@home')->name('home');
Route::get('comics/{comic}', 'Guest\HomeController@show')->name('comic');

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){          
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('comics', 'ComicController');
    Route::resource('articles', 'ArticlesController');
});
