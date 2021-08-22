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
                        <table class="table table-bordered table-striped" id="table-bidang">
                            <thead>
                              <tr>
                                <th>Bidang</th>
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Nip</th>
                                <th>SK</th>
                                <th>Tahun Menjabat</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($bidangs as $p)
                                <tr>
                                    <td>{{ $p->bidang }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td>{{ $p->nip }}</td>
                                    <td>{{ $p->sk }}</td>
                                    <td>{{ $p->tahun_menjabat }}</td>
                                    <td>{{ $p->status }}</td>
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
            $('#table-bidang').DataTable({
                responsive:true
            });
        } );
    </script>
@endpush