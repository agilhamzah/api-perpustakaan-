<?php

namespace App\Http\Controllers\API;

use APP\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use APP\Models\SiswaM;
use Exception;
use Illuminate\Http\Request;

class perpustakaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();

        if($siswa) {
            return ApiFormatter::createApi(200, 'Success', $siswa);
        }else{
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nis' => 'required',
                'namalengkap' => 'required',
                'jk' => 'required',
                'kelas' => 'required',
                'nowa' => 'required',
                'email' => 'required',
            ]);

            $siswa = siswa::create([
                'nis' => $request->nis,
                'namalengkap' => $request->namalengkap,
                'jk' => $request->jk,
                'kelas' => $request->kelas,
                'nowa' => $request->nowa,
                'email' => $request->email
            ]);

            $siswa = siswa::where('id', '=', $siswa->id)->get();

            if($siswa) {
                return ApiFormatter::createApi(200, 'Success', $siswa);
            }else{
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::where('id', '=', $id)->get();

        if($siswa) {
            return ApiFormatter::createApi(200, 'Success', $siswa);
        }else{
            return ApiFormatter::createApi(400, 'failed');
        }
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nis' => 'required',
                'namalengkap' => 'required',
                'jk' => 'required',
                'kelas' => 'required',
                'nowa' => 'required',
                'email' => 'required',
            ]);

            $siswa = siswa::findOrFail($id);

            $siswa->update([
                'nis' => $request->nis,
                'namalengkap' => $request->namalengkap,
                'jk' => $request->jk,
                'kelas' => $request->kelas,
                'nowa' => $request->nowa,
                'email' => $request->email
            ]);

            $siswa = siswa::where('id', '=', $siswa->id)->get();

            if($siswa) {
                return ApiFormatter::createApi(200, 'Success', $siswa);
            }else{
                return ApiFormatter::createApi(400, 'failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
        $siswa = siswa::findOrFail($id);
    
       $siswa = $siswa->delete();

        if($siswa) {
            return ApiFormatter::createApi(200, 'Success Destroy siswa');
        }else{
            return ApiFormatter::createApi(400, 'failed');
        } 
    } catch (Exception $error) {
        return ApiFormatter::createApi(400, 'failed');
    }
    }
}
