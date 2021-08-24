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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addtask', [App\Http\Controllers\AgileController::class, 'addtask']);
Route::post('/status', [App\Http\Controllers\AgileController::class, 'statusUpdade']);
Route::post('/updateTask', [App\Http\Controllers\AgileController::class, 'taskUpdate']);
Route::post('/deleteTask', [App\Http\Controllers\AgileController::class, 'taskDelete']);
