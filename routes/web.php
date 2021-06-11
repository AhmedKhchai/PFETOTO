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

Route::get('/', function () {
    return view('Mainlogin');
});
Route::get('logout', '\App\Http\Controllers\AdminDashboardController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\AdminDashboardController@index')->name('dashboard');
});
Route::group(['middleware' => ['auth','role:superadministrator']], function () {
    Route::get('/dashboard/addArticle', 'App\Http\Controllers\ArticleController@create')->name('dashboard.addArticle');
    Route::post('/dashboard/addArticle', 'App\Http\Controllers\ArticleController@store')->name('dashboard.addArticle');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
