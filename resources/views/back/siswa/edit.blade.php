@extends('back.app')
@section('konten')
@foreach ($siswa as $k => $v)
<form action="{{ route('siswa.update',$v->id) }}" method="POST"> 
@method('put')
    @csrf
    <div class="card-body"> 
        <div class="form-group row"> 
         <label for="" class="col-sm-2">nama lengkap</label> 
        <div class="col-sm-4"> 
      <input type="text" name="name" value = "{{ $v->name }}" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">username</label> 
        <div class="col-sm-4"> 
      <input type="text" name="username" value = "{{ $v->username }}" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">password</label> 
        <div class="col-sm-4"> 
      <input type="text" name="password" value = "{{ $v->password }}"required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">Alamat</label> 
        <div class="col-sm-4"> 
      <input type="text" name="Alamat" value = "{{ $v->Alamat }}" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">nomer_handphone</label> 
        <div class="col-sm-4"> 
      <input type="number" name="nomer_handphone"  value = "{{ $v->nomer_handphone }}" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">tanggal_lahir</label> 
        <div class="col-sm-4"> 
      <input type="date" name="tanggal_lahir" value = "{{ $v->tanggal_lahir }}"required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form>
@endforeach 
    </div> 
@endsection