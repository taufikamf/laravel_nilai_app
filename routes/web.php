<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\HakAksesController;
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

Auth::routes(['register' => false]);
Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::resource('/user', UserController::class);
Route::resource('/matkul', MatkulController::class);
Route::resource('/nilai', NilaiController::class);
Route::resource('/kriteria', KriteriaController::class);
Route::resource('/hak-akses', HakAksesController::class);

