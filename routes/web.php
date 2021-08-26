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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/addtask', [App\Http\Controllers\AgileController::class, 'addtask']);
Route::post('/status', [App\Http\Controllers\AgileController::class, 'statusUpdade']);
Route::post('/updateTask', [App\Http\Controllers\AgileController::class, 'taskUpdate']);
Route::post('/deleteTask', [App\Http\Controllers\AgileController::class, 'taskDelete']);
Route::get('/file-manager', [App\Http\Controllers\FileManagerController::class, 'fileManager'])->middleware('auth');
Route::post('/file-uplode', [App\Http\Controllers\FileManagerController::class, 'fileUplode']);
// for fileManagerJava
Route::get('/file-manager-java', [App\Http\Controllers\FileJavaController::class, 'fileJava'])->middleware('auth');
Route::post('/ajax-file-upload', [App\Http\Controllers\FileJavaController::class, 'fileUplode']);
Route::get('/get-all-files', [App\Http\Controllers\FileJavaController::class, 'allFile']);
Route::post('/filters', [App\Http\Controllers\FileJavaController::class, 'allFile']);
