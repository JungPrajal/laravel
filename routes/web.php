<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  // scope resolution
    return view('welcome');
});

// custom routes
Route::get('dashboard', function () {  // scope resolution
    return view('admin.dashboard');
});

//tasks index.blade

Route::Resource('tasks', 'App\Http\Controllers\TaskController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
