@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Arsip Event</h3>

                    <a href="/event/tambah"> + Tambah Event</a>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Waktu Pelaksanaan</th>
                        <th>Lokasi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($event as $p)
                        <tr>
                            <td>{{ $p->judul }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>{{ $p->tanggal_pelaksanaan }}</td>
                            <td>{{ $p->waktu_pelaksanaan }}</td>
                            <td>{{ $p->lokasi }}</td>
                            <td>
                                <a href="/event/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/event/hapus/{{ $p->id }}">Hapus</a>
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
    </div>
@endsection

