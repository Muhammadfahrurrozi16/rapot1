@extends('back.app')
@section('konten')
@foreach ($kelas as $k => $v)
<form action="{{ route('kelas.update',$v->id) }}" method="POST"> 
@method('put')
    @csrf
    <div class="card-body"> 
    </div>
        <div class="form-group row"> 
         <label for="" class="col-sm-2">nama kelas</label> 
        <div class="col-sm-4"> 
      <input type="text" name="name" value = "{{$v->name }}"required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form>
@endforeach 
    </div> 
@endsection