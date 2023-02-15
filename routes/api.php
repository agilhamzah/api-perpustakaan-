<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostC;

Route::get('/', function(){
      return 'Hello World !';
});

Route::get('/posts', [Postc::class, 'index']);
