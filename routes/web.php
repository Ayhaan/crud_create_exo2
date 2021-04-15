<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\StudentController;
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

//FRONTEND
Route::get('/', [AllController::class, 'home'])->name('home');

//BACKEND
Route::get('/admin/student', [StudentController::class, 'index'])->name('students.index');
Route::get('/admin/student/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/admin/student/store', [StudentController::class, 'store'])->name('students.store');