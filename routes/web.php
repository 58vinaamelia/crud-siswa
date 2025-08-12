<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/siswa/show/{id}',[SiswaController::class,'show']);

Route::get('/siswa/edit/{id}',[SiswaController::class,'edit'])->name('siswa.edit');

Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
