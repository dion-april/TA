@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Data Struktural Bidang</h3>

                    <a href="/bidang/tambah"> + Tambah data bidang</a>
  
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="table-bidang">
                    <thead>
                      <tr>
                        <th>Bidang</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>Nip</th>
                        <th>SK</th>
                        <th>Tahun Menjabat</th>
                        <th>Status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($bidang as $p)
                        <tr>
                            <td>{{ $p->bidang }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jabatan }}</td>
                            <td>{{ $p->nip }}</td>
                            <td>{{ $p->sk }}</td>
                            <td>{{ $p->tahun_menjabat }}</td>
                            <td>{{ $p->status }}</td>
                            <td>
                                <a href="/bidang/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/bidang/hapus/{{ $p->id }}">Hapus</a>
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
        $('#table-bidang').DataTable(
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