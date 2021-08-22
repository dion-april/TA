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
                    <div class="card-body register-card-body">
                      <h2><p class="login-box-msg">Tambah File</p></h2>
                
                      <form enctype="multipart/form-data" action="{{route('pegawai.file.save')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="file" placeholder="file">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="bidang" placeholder="bidang">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="file" placeholder="file">
                            <div class="input-group-append">
                              <div class="input-group-text">
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>
                    <!-- /.form-box -->
                  </div><!-- /.card -->
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