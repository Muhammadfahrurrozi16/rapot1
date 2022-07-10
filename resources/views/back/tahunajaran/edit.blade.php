@extends('back.app')
@section('konten')
@foreach ($tahun_pendidikan as $k => $v) 
<form action="{{ route('tahunajaran.update',$v->id) }}" method="POST"> 
@method('put')
    @csrf
    <div class="card-body"> 
    </div>
        <div class="form-group row"> 
         <label for="" class="col-sm-2">TahUn ajaran</label> 
        <div class="col-sm-4"> 
      <input type="text" name="tahun_ajaran" value = "{{$v->tahun_ajaran}}"required class="form-control"placeholder="2020/2021" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">semester</label> 
        <div class="col-sm-4"> 
        <div class="form-group">
                <select name="semester" class="form-control custom-select">
                <option value ="{{$v->semester}}"></option>
                  <option >Ganjil</option> 
                  <option >Genap</option> 
                </select>
        </div>
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form> 
@endforeach
    </div> 
@endsection