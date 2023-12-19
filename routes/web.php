<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('student/{id}/read', [StudentController::class, 'read'])->name('student.read');

