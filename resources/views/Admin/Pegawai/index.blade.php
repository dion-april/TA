@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Data Pegawai</h3>

                    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
  
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="table-pegawai">
                    <thead>
                      <tr>
                        <th>NIP</th>
                        <th>Nama_Lengkap</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Unit Organisasi</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawai as $p)
                        <tr>
                            <td>{{ $p->nip }}</td>
                            <td>{{ $p->nama_lengkap }}</td>
                            <td>{{ $p->pangkat }}</td>
                            <td>{{ $p->jabatan }}</td>
                            <td>{{ $p->unit_organisasi }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>{{ $p->status }}</td>
                            <td>
                                <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
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
        $('#table-pegawai').DataTable(
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