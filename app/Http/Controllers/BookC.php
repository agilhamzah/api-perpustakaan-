<?php

namespace App\Http\Controllers;

use App\Models\bookM;
use Illuminate\Http\Request;

class BookC extends Controller
{
    function index(){
        $siswa = bookM::all();
        return response()->json($siswa);
    }
}
