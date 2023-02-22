<?php

namespace App\Http\Controllers;

use App\Models\TransaksiM;
use Illuminate\Http\Request;

class TransaksiC extends Controller
{
    function index(){
        $siswa = TransaksiM::all();
        return response()->json($siswa);
    }
}
