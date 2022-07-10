@extends('back.app')
@section('konten')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <a class="btn btn-success" href="/nilai/create"><i class="fa fa-plus"></i> Tambah nilai</a><br><br>
                <h3 class="card-title">Data Penilaian</h3>

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
                      <th>mapel</th>
                      <th>PH</th>
                      <th>PTS</th>
                      <th>PAS</th>
                      <th>Rata-rata</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($nilai as $k => $v) 
                    <tr>
                      <td>{{ ++$k }}</td>
                      <td>{{ $v->siswa->name }}</td>
                      <td>{{ $v->mata_pelajaran->mata_pelajaran }}</td>
                      <td>{{ $v->Total_PH }}</td>
                      <td>{{ $v->PTS }}</td>
                      <td>{{ $v->PAS }}</td>
                      <td>{{ $v->Total_Akhir }}</td>
                      <td> 
                    <form action="{{ route('nilai.destroy', $v['id']) }}" method="POST"> 
                     <a href="{{ route('nilai.edit', $v['id']) }}"class="btn btn-sm btn-success">Edit</a> 
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