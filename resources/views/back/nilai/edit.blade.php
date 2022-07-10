@extends('back.app')
@section('konten')
@foreach ($nilai as $k => $v)
<form action="{{ route('nilai.update',$v->id) }}" method="POST"> 
 @method('put')
    @csrf
    <div class="card-body"> 
    <div class="form-group row"> 
         <label for="" class="col-sm-2">Nama</label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="siswa_id" class="form-control custom-select">
                  <option value= "{{$v->siswa_id}}">{{$v->siswa->name}}</option>
                @foreach ($siswa as $k => $p) 
                  <option value= "{{$p->id}}">{{$p->name}}</option>
                @endforeach
                </select>
        </div>
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">Nama</label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="mata_pelajaran_id" class="form-control custom-select" value= "{{$v->mata_pelajaran_id}}">
                <option value= "{{$v->mata_pelajaran_id}}">{{$v->Mata_pelajaran->mata_pelajaran}} </option>
                @foreach ($mata_pelajarans as $k => $p) 
                  <option value= "{{$p->id}}">{{$p->mata_pelajaran}} {{$p->kelas->name}}</option>
                @endforeach
                </select>
        </div>
     </div> 
    </div>
        <div class="form-group row"> 
         <label for="" class="col-sm-2">PH1</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PH1"  value = "{{$v->PH1}}"required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PH2</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PH2"  value = "{{$v->PH2}}"required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PH3</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PH3" value = "{{$v->PH3}}" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PTS</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PTS"  value = "{{$v->PTS}}" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PAS</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PAS" value = "{{$v->PAS}}" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form>
@endforeach 
    </div> 
@endsection