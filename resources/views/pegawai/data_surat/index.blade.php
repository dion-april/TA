@extends('pegawai.template')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Surat</h1>
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
                      <table id="surat-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis Surat</th>
                          <th>nama Surat</th>
                          <th>Nama Pengirim</th>
                          <th>Asal Instansi</th>
                          <th>Tanggal</th>
                          <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($surats as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->jenis_surat}}</td>
                                    <td>{{$item->nama_surat}}</td>
                                    <td> {{$item->nama_pengirim}}</td>
                                    <td>{{$item->asal_instansi}}</td>
                                    @php
                                        $tgl_surat = \Carbon\Carbon::parse($item->tanggal);
                                    @endphp
                                    <td>{{$tgl_surat->isoFormat('d MMM Y')}}</td>
                                    <td>{{$item->created_at->isoFormat('d MMM Y')}}</td>
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
            $('#surat-table').DataTable({
                responsive:true
            });
        } );
    </script>
@endpush