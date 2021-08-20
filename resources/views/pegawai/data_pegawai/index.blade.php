@extends('pegawai.template')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Pegawai</h1>
        <a href="{{route('admin.dashboard')}}"></a>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="pegawai-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>NIP</th>
                          <th>Nama Lengkap</th>
                          <th>perangkat</th>
                          <th>Jabatan</th>
                          <th>Unit Organisasi</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nip}}</td>
                                    <td>{{$item->nama_lengkap}}</td>
                                    <td> {{$item->perangkat}}</td>
                                    <td>{{$item->jabatan}}</td>
                                    <td>{{$item->unit_organisasi}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>{{$item->status}}</td>
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
</section>
@endsection

@push('custom-js')
    <script>
        $(document).ready( function () {
            $('#pegawai-table').DataTable({
                responsive:true
            });
        } );
    </script>
@endpush