<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\BookC;
use App\Http\Controllers\PostC;
use App\Http\Controllers\TransaksiC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
      return 'Hello World !';
});

Route::get('/posts', [Postc::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}', [Postc::class, 'detail'])->middleware(['auth:sanctum']);

Route::post('/login', [AuthC::class, 'login']);

Route::get('/password', function(){
      return Hash::make('rahasia');
});

Route::get('/books', [BookC::class, 'index']);

Route::get('/transaksi', [TransaksiC::class, 'index']);