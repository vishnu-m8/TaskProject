<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginRegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    // ------------student--------------
    Route::get('/student', [StudentController::class, 'studentShow'])->name('studentShow');
    Route::get('/student-add', [StudentController::class, 'studentadd'])->name('studentadd');
    Route::post('/student-store', [StudentController::class, 'studentstore'])->name('studentstore');
    Route::get('/student-edit/{id}', [StudentController::class, 'studentedit'])->name('studentedit');
    Route::put('/student-update/{id}', [StudentController::class, 'studentupdate'])->name('studentupdate');
    Route::get('/student-destory/{id}', [StudentController::class, 'studentdestory'])->name('studentdestory');


     // ------------teacher--------------
     Route::get('/teacher', [TeacherController::class, 'teacherShow'])->name('teacherShow');
     Route::get('/teacher-add', [TeacherController::class, 'teacheradd'])->name('teacheradd');
     Route::post('/teacher-store', [TeacherController::class, 'teacherstore'])->name('teacherstore');
     Route::get('/teacher-edit/{id}', [TeacherController::class, 'teacheredit'])->name('teacheredit');
     Route::put('/teacher-update/{id}', [TeacherController::class, 'teacherupdate'])->name('teacherupdate');
     Route::get('/teacher-destory/{id}', [TeacherController::class, 'teacherdestory'])->name('teacherdestory');

});
