<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpController;

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

Route::get('/',[UserController::class,'login'])->name('login.page');

Route::get('/register',[UserController::class,'register'])->name('register.page');

Route::post('/auth',[UserController::class,'auth'])->name('auth.user');

Route::get('/',[UserController::class,'login'])->name('logout.page');

Route::post('/reg',[UserController::class,'reg'])->name('reg.user');

Route::post('/regEmp',[EmpController::class,'regEmp'])->name('reg.emp');

Route::get('/regView',[EmpController::class,'regView'])->name('reg.view');

Route::get('/listView',[EmpController::class,'listView'])->name('list.view');

Route::get('/home',[UserController::class,'homeView'])->name('home.view');

Route::resource('employees',EmpController::class);
