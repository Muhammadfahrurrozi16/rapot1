@extends('back.app')
@section('konten')
@foreach ($mata_pelajarans as $k => $v) 
<form action="{{ route('dashboard.update',$v->id) }}" method="POST"> 
@method('put')
    @csrf
    <div class="card-body"> 
    <div class="form-group row"> 
         <label for="" class="col-sm-2">kelas</label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="kelas_id" class="form-control custom-select">
                @foreach ($kelas as $k => $v)
                  <option value ="{{$v->id}}" >{{$v->name}}</option>
                @endforeach
                </select>
        </div>
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">tahun pendidikan </label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="tahun_pendidikan_id" class="form-control custom-select">
                @foreach ($tahun_pendidikan as $k => $v)
                  <option value ="{{$v->id}}" >{{$v->tahun_ajaran}}{{ $v->semester }}</option>
                  @endforeach
                </select>
        </div>
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">guru </label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="guru_id" class="form-control custom-select">
                @foreach ($guru as $k => $v)
                  <option value ="{{$v->id}}" >{{$v->name}}</option>
                  @endforeach
                </select>
        </div>
     </div> 
    </div>
        <div class="form-group row"> 
         <label for="" class="col-sm-2">Nama mapel</label> 
        <div class="col-sm-4"> 
      <input type="text" name="mata_pelajaran"  value ="" required class="form-control"placeholder="nama mapel" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form>
@endforeach 
    </div> 
@endsection