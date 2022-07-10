<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\kelas;
use App\Models\Mata_pelajaran;
use App\Models\penilaian;
use App\Models\siswa;

class nilaicontrollers extends Controller
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
        $Nilai = penilaian::all();
        return view('back.nilai.index',['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas, 'nilai' => $Nilai]);
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
        $Nilai = penilaian::all();
        $Siswa = siswa::all();
        return view('back.nilai.create',['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas,'nilai' => $Nilai,'siswa' => $Siswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Nilai = new penilaian();
        $Nilai->siswa_id = $request->siswa_id;
        $Nilai->mata_pelajaran_id = $request->mata_pelajaran_id;
        $Nilai->PH1 = $request->PH1;
        $Nilai->PH2 = $request->PH2;
        $Nilai->PH3 = $request->PH3;
        $Nilai->PTS = $request->PTS;
        $Nilai->PAS = $request->PAS;
        $total = ($Nilai->PH1+$Nilai->PH2+$Nilai->PH3)/3;
        $Nilai->Total_PH = $total;
        $totalS = ($Nilai->PTS+$Nilai->PAS)/2;
        $Total_akhir = ($total*0.4)+($totalS*0.6); 
        $Nilai->Total_akhir = $Total_akhir;
        $Nilai->save();
        return redirect('/nilai');

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
        $mata_pelajaran = Mata_pelajaran::all();
        $Kelas = kelas::all();
        $Nilai = penilaian::where('id', $id)->get();
        $Siswa = siswa::all();
        return view('back.nilai.edit',['mata_pelajarans' =>  $mata_pelajaran, 'kelas' => $Kelas,'nilai' => $Nilai,'siswa' => $Siswa]);
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
        $Nilai = penilaian::findOrFail($id);
        $Nilai->siswa_id = $request->siswa_id;
        $Nilai->mata_pelajaran_id = $request->mata_pelajaran_id;
        $Nilai->PH1 = $request->PH1;
        $Nilai->PH2 = $request->PH2;
        $Nilai->PH3 = $request->PH3;
        $Nilai->PTS = $request->PTS;
        $Nilai->PAS = $request->PAS;
        $total = ($Nilai->PH1+$Nilai->PH2+$Nilai->PH3)/3;
        $Nilai->Total_PH = $total;
        $totalS = ($Nilai->PTS+$Nilai->PAS)/2;
        $Total_akhir = ($total*0.4)+($totalS*0.6); 
        $Nilai->Total_akhir = $Total_akhir;
        $Nilai->save();
        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Nilai = penilaian::findOrFail($id);
        $Nilai->delete();
        return redirect('/nilai');

    }
}
