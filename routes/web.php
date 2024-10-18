<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index']);
Route::post('create-student-info',[PostController::class, 'storeStudent'])->name('create.student');
