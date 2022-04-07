<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
/* use Auth; */

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USER
Route::resource('users', UserController::class);

Route::get('/profile', function (){
    return view('profile');
});
Route::get('/edit', function (){
    return view('edit');
});
Route::get('/admin', function (){
    return view('admin');
});

// Main
/* Route::get('/main', function (){
    return view('main');
}); */

Route::get('/main', [App\Http\Controllers\MessageController::class, 'index']);