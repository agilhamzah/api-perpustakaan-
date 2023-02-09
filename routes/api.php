<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaC;

Route::get('/', function(){
      dd('Hello World !');
});

Route::get('/siswa', [SiswaC::class, 'index']);
Route::post('/siswa/store', [perpustakaan::class, 'store']);
Route::get('/siswa/show/{id}', [perpustakaan::class, 'show']);
Route::post('/siswa/update/{id}', [perpustakaan::class, 'update']);
Route::get('/siswa/destroy/{id}', [perpustakaan::class, 'destroy']);