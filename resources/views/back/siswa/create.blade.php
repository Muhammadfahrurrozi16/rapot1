@extends('back.app')
@section('konten')
<form action="/siswa" method="POST"> 
    @csrf
    <div class="card-body"> 
        <div class="form-group row"> 
         <label for="" class="col-sm-2">nama lengkap</label> 
        <div class="col-sm-4"> 
      <input type="text" name="name" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">username</label> 
        <div class="col-sm-4"> 
      <input type="text" name="username" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">password</label> 
        <div class="col-sm-4"> 
      <input type="text" name="password" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">Alamat</label> 
        <div class="col-sm-4"> 
      <input type="text" name="Alamat" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">nomer_handphone</label> 
        <div class="col-sm-4"> 
      <input type="number" name="nomer_handphone" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="form-group row"> 
         <label for="" class="col-sm-2">tanggal_lahir</label> 
        <div class="col-sm-4"> 
      <input type="date" name="tanggal_lahir" required class="form-control"placeholder="" /> 
     </div> 
    </div>
    <div class="card-footer"> 
        <button type="submit" class="btn btn-sm btn-success">Simpan</button> 
    </div> 
    </form> 
    </div> 
@endsection