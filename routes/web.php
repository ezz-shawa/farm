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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});

// Route::resource('/second', 'App\Http\Controllers\Admin\SecondController');
Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::get('second', 'SecondController@showString')->middleware('auth');
    Route::get('index','SecondController@getIndex');
});

Route::get('login', function () {
    return 'You Must Login Before';
}) -> name('login');


Route::resource('user', 'UserController');

Route::get('landing', function () {
    return view('landing');
});





Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') -> middleware('verified');

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return 'dashboard';
});
