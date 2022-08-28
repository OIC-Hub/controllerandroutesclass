<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\users\UsersController;

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
//     return view('about');
// });

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/about/{name}/{id}', function ($name, $key) {
    return "Welcome to laravel $name $key. Laravel is a modern day PHP framework";
});
Route::get('/users/dashboard', [UsersController::class, 'index']);
