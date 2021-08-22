@extends('pegawai.template')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data File</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="{{route('pegawai.file.create')}}" class="btn btn-success">Upload File</a>
            </div>
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
                          <th>Bidang</th>
                          <th>Keterangan</th>
                          <th>File</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->bidang}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>{{$item->file}}</td>
                                    <td>{{$item->created_at->isoFormat('d MMM Y')}}</td>
                                    <td>
                                        <a href="{{route('pegawai.file.download', $item->id)}}" class="btn btn-primary">Download</a>
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