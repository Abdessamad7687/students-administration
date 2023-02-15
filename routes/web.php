<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index']);
Route::get('/table', [StudentController::class, 'table'])->name('table');
