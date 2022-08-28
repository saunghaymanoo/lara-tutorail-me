<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ManagerController;
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

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'getPostLogin'])->name('login');
Route::get('/logout',[AuthController::class,'getLogout']);

Route::middleware('admin')->group(function(){
    Route::get('/admin/home',[AdminController::class,'index']);
});
Route::middleware('manager')->group(function(){
    Route::get('/manager/home',[ManagerController::class,'index']);
    Route::get('/manager/student/delete/{id}',[ManagerController::class,'delete']);
    Route::get('/manager/student/edit/{id}',[ManagerController::class,'edit']);
    Route::post('/manager/student/update',[ManagerController::class,'update']);
    Route::get('manager/student/download', [ManagerController::class,'download']);

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pass',function(){
    dd(bcrypt('manager'));
});
