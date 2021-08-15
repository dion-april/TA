@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Data Surat</h3>

                    <a href="/surat/tambah"> + Tambah Surat</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="table-surat">
                    <thead>
                      <tr>
                        <th>Jenis</th>
                        <th>Nama Surat</th>
                        <th>Nama Pengirim</th>
                        <th>Asal Instansi</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($surat as $p)
                        <tr>
                            <td>{{ $p->jenis }}</td>
                            <td>{{ $p->nama_surat }}</td>
                            <td>{{ $p->nama_pengirim }}</td>
                            <td>{{ $p->asal_instansi }}</td>
                            <td>{{ $p->tanggal }}</td>
                            <td>
                                <a href="/surat/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/surat/hapus/{{ $p->id }}">Hapus</a>
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
@push('custom-js')
      <script> 
      $(document).ready( function () {
        $('#table-surat').DataTable(
          {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    }
        );
    } );
      </script>
@endpush