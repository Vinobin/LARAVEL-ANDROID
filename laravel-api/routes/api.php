<?php

use App\Http\Controllers\Api\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('Mahasiswa', MahasiswaController::class);
Route::get('/carimahasiswa', [MahasiswaController::class, 'cari']);
