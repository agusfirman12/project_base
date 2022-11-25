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

//memberikan penjelasan umum
//route soal 1
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal1/{id?}', [TraceController::class,  'viewSoal1'])->name('soal1');
    Route::post('/soal1/process/',[TraceController::class,'soal1Process'])->name('soal1-process');
});
//route soal 2
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal2/{id?}', [TraceController::class,  'viewSoal2'])->name('soal2');
    Route::post('/soal2/process',[TraceController::class,'soal2Process'])->name('soal2-process');
});
//route soal 3
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal3/{id?}', [TraceController::class,  'viewSoal3'])->name('soal3');
    Route::post('/soal3/process',[TraceController::class,'soal3Process'])->name('soal3-process');
});
//route soal 4
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal4/{id?}', [TraceController::class,  'viewSoal4'])->name('soal4');
    Route::post('/soal4/process',[TraceController::class,'soal4Process'])->name('soal4-process');
});
//route soal 5
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal5', [TraceController::class,  'viewSoal5'])->name('soal5');
    Route::post('/soal5/process',[TraceController::class,'soal5Process'])->name('soal5-process');
});
//route soal 6
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal6', [TraceController::class,  'viewSoal6'])->name('soal6');
    Route::post('/soal6/process',[TraceController::class,'soal6Process'])->name('soal6-process');
});
//route soal 7
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal7', [TraceController::class,  'viewSoal7'])->name('soal7');
    Route::post('/soal7/process',[TraceController::class,'soal7Process'])->name('soal7-process');
    Route::get('/finish', [TraceController::class,  'finish'])->name('finish');
});
