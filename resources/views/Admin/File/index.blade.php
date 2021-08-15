@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Arsip File</h3>

                    <a href="/file/tambah"> + Tambah File</a>
  
              
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="table-file">
                    <thead>
                      <tr>
                        <th>File</th>
                        <th>Bidang</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($file as $p)
                        <tr>
                            <td>{{ $p->file }}</td>
                            <td>{{ $p->bidang }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>
                                <a href="/file/edit/{{ $p->id }}">Edit</a>
                                |
                                <a href="/file/hapus/{{ $p->id }}">Hapus</a>
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
        $('#table-file').DataTable(
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