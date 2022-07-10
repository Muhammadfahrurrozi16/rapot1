<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\kelas;
use App\Models\Mata_pelajaran;
use App\Models\siswa;

class siswacontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Siswa =siswa::all();
        return view('back.siswa.index',['siswa' => $Siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Siswa =siswa::all();
        return view('back.siswa.create',['siswa' => $Siswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Siswa = new siswa();
        $Siswa->name = $request->name;
        $Siswa->username = $request->username;
        $Siswa->password = $request->password;
        $Siswa->password = $request->password;
        $Siswa->Alamat = $request->Alamat;
        $Siswa->nomer_handphone = $request->nomer_handphone;
        $Siswa->tanggal_lahir = $request->tanggal_lahir;
        $Siswa->save();
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Siswa =siswa::where('id', $id)->get();
        return view('back.siswa.edit',['siswa' => $Siswa]);
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
        $Siswa =siswa::findOrFail($id);
        $Siswa->name = $request->name;
        $Siswa->username = $request->username;
        $Siswa->password = $request->password;
        $Siswa->password = $request->password;
        $Siswa->Alamat = $request->Alamat;
        $Siswa->nomer_handphone = $request->nomer_handphone;
        $Siswa->tanggal_lahir = $request->tanggal_lahir;
        $Siswa->save();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Siswa =siswa::findOrFail($id);
        $Siswa->delete();
        return redirect('/siswa');
    }
}
