<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;

Route::get('/', function () {
    return view('index');
})->middleware('pin.auth')->name('index');

/**
 * **Auth Routes**
 */
Route::get('/login', [LoginController::class, 'index'])->middleware('pin.guest')->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->middleware('pin.guest')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('pin.auth')->name('logout');

Route::group(['prefix' => 'gallery', 'as' => 'gallery.', 'middleware' => 'pin.auth'], function () {
    Route::get('/', [FileController::class, 'index'])->name('index');
    Route::post('/upload', [FileController::class, 'upload'])->name('upload');
    Route::get('/download/{id}', [FileController::class, 'download'])->name('download');
    Route::get('/files', [FileController::class, 'listFiles'])->name('list');
    Route::get('/file/{id}', [FileController::class, 'getFile'])->name('file');
    Route::get('/get-files', [FileController::class, 'getFiles'])->name('get-files');
});

Route::get('/challenge', [ChallengeController::class, 'index'])->name('challenge.index');
Route::get('/challenge/generate', [ChallengeController::class, 'generate'])->name('challenge.generate');
Route::get('/challenge/get-challenges', [ChallengeController::class, 'getChallenges'])->name('challenge.get-challenges');