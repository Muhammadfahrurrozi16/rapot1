@extends('back.app')
@section('konten')
<form action="/nilai" method="POST"> 
    @csrf
    <div class="card-body"> 
    <div class="form-group row"> 
         <label for="" class="col-sm-2">Nama</label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="siswa_id" class="form-control custom-select">
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
                <select name="mata_pelajaran_id" class="form-control custom-select">
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
      <input type="number" name="PH1" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PH2</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PH2" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PH3</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PH3" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PTS</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PTS" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">PAS</label> 
        <div class="col-sm-4"> 
      <input type="number" name="PAS" required class="form-control"placeholder="00" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form> 
    </div> 
@endsection