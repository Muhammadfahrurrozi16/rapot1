@extends('back.app')
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a class="btn btn-success" href="/siswa/create"><i class="fa fa-plus"></i> Tambah </a><br><br>
                <h3 class="card-title">Data ssiwa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>nama</th>
                      <th>username</th>
                      <th>password</th>
                      <th>Alamat</th>
                      <th>tanggal_lahir</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($siswa as $k => $v) 
                    <tr>
                      <td>{{ ++$k }}</td>
                      <td>{{ $v->name }}</td>
                      <td>{{ $v->username }}</td>
                      <td>{{ $v->password }}</td>
                      <td>{{ $v->Alamat }}</td>
                      <td>{{ $v->tanggal_lahir }}</td>
                      <td> 
                    <form action="{{ route('siswa.destroy', $v['id']) }}" method="POST"> 
                     <a href="{{ route('siswa.edit', $v['id']) }}"class="btn btn-sm btn-success">Edit</a> 
                  @csrf 
                  @method('DELETE') 
                    <button type="submit">Delete</button> 
                    </form> 
                    </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection