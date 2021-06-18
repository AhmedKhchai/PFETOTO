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

    Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('home');
    Route::get('/article/{article}', 'App\Http\Controllers\ArticleController@show')->name('home');
    Route::post('/article/{article}', 'App\Http\Controllers\commentController@store')->name('home');
    Route::delete('/article/{article}', 'App\Http\Controllers\commentController@store')->name('home');

    Route::get('/hotellist', 'App\Http\Controllers\ArticleController@hotellist')->name('hotel');
Route::get('/salon', 'App\Http\Controllers\ArticleController@salon')->name('salon');
Route::get('/resto', 'App\Http\Controllers\ArticleController@resto')->name('resto');
Route::get('/cafe', 'App\Http\Controllers\ArticleController@cafe')->name('cafe');
Route::get('/blg', 'App\Http\Controllers\ArticleController@blg')->name('blg');

    Route::get('/loginregister', function () {
        return view('Mainlogin');
    });
    

    
    // Route::group(['middleware' => ['auth','role:user']], function () {

    // });
    
    Route::group(['middleware' => ['auth','role:superadministrator']], function () {
        Route::get('/dashboard', 'App\Http\Controllers\AdminDashboardController@index')->name('dashboard');
        Route::get('/dashboard/addArticle', 'App\Http\Controllers\ArticleController@create')->name('dashboard.addArticle');
        Route::post('/dashboard/addArticle', 'App\Http\Controllers\ArticleController@store')->name('dashboard.addArticle');
    });
    Route::get('logout', '\App\Http\Controllers\AdminDashboardController@logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
