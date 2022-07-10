<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\kelas;
use App\Models\Mata_pelajaran;
use App\Models\tahun_pendidikan;

class tahunajarancontrollers extends Controller
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
        $Tahun_pendidikan = tahun_pendidikan::all();
        return view('back.tahunajaran.index', ['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas, 'tahun_pendidikan'=>$Tahun_pendidikan ]);
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
        return view('back.tahunajaran.create', ['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas, 'tahun_pendidikan'=>$Tahun_pendidikan ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tahun_pendidikan = new tahun_pendidikan();
        $Tahun_pendidikan->tahun_ajaran =  $request->tahun_ajaran;
        $Tahun_pendidikan->semester =  $request->semester;
        $Tahun_pendidikan->save();
        return redirect('/tahunajaran');

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
        $Tahun_pendidikan = tahun_pendidikan::where('id', $id)->get();
        $mata_pelajaran = Mata_pelajaran::all();
        $Kelas = kelas::all();
        return view('back.tahunajaran.edit', ['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas, 'tahun_pendidikan'=>$Tahun_pendidikan ]);
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
        $Tahun_pendidikan = tahun_pendidikan::findOrFail($id);
        $Tahun_pendidikan->tahun_ajaran =  $request->tahun_ajaran;
        $Tahun_pendidikan->semester =  $request->semester;
        $Tahun_pendidikan->save();
        return redirect('/tahunajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tahun_pendidikan = tahun_pendidikan::findOrFail($id);
        $Tahun_pendidikan->delete();
        return redirect('/tahunajaran');
    }
}
