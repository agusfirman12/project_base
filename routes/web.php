<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TraceController;

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

//main page
Route::get('/', [TraceController::class, 'index']);
Route::post('/pilih-user', [TraceController::class, 'choseUser'])->name('pilih-user');
//end main page
Route::get('/login-admin', [AdminController::class, 'index']);
Route::post('/process-loginAdmin', [AdminController::class, 'processLogin'])->name('loginAdmin');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class,  'logout'])->name('logout');
//route lihat alumni
Route::get('/alumni/{jurusan}', [AdminController::class, 'viewAlumni'])->name('view-alumni');
//end lihat alumni
//route admin

//end route admin

//route alumni
Route::get('/login-alumni', [TraceController::class, 'login'])->name('login-alumni');
Route::post('/process-login', [TraceController::class, 'loginProcess'])->name('loginProcess');
//end routing alumni
