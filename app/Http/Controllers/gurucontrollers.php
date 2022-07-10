<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\kelas;
use App\Models\Mata_pelajaran;
use App\Models\tahun_pendidikan;
use App\Models\guru;
use App\Models\siswa;



class gurucontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $mata_pelajaran = Mata_pelajaran::all();
        $Kelas = kelas::all();
        return view('back.index', ['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mata_pelajaran = Mata_pelajaran::all();
        $Kelas = kelas::all();
        $Tahun_pendidikan = tahun_pendidikan::all();
        $Guru = guru::all();
        return view('back.create',['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas,'tahun_pendidikan' =>  $Tahun_pendidikan, 'guru' => $Guru]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mata_pelajaran = new Mata_pelajaran();
        $mata_pelajaran->kelas_id = $request->kelas_id;
        $mata_pelajaran->tahun_pendidikan_id  = $request->tahun_pendidikan_id;
        $mata_pelajaran->guru_id = $request->guru_id;
        $mata_pelajaran->mata_pelajaran= $request->mata_pelajaran;
        $mata_pelajaran->save();
        return redirect('/dashboard');
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
        $mata_pelajaran = Mata_pelajaran::where('id', $id)->get();
        $Kelas = kelas::all();
        $Siswa = siswa::all();
        $Tahun_pendidikan = tahun_pendidikan::all();
        $Guru = guru::all();
        return view('back.edit',['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas,'tahun_pendidikan' =>  $Tahun_pendidikan, 'guru' => $Guru]);
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
        $mata_pelajaran = Mata_pelajaran::findOrFail($id);
        $mata_pelajaran->kelas_id = $request->kelas_id;
        $mata_pelajaran->tahun_pendidikan_id  = $request->tahun_pendidikan_id;
        $mata_pelajaran->guru_id = $request->guru_id;
        $mata_pelajaran->mata_pelajaran= $request->mata_pelajaran;
        $mata_pelajaran->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
