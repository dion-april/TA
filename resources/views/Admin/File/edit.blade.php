@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body register-card-body">
                      <h2><p class="login-box-msg">Edit File</p></h2>
                
                      <form action="{{route('file.update',$file->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $file->file }}" name="file" placeholder="File">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $file->bidang }}" name="bidang" placeholder="bidang">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $file->keterangan }}" name="keterangan" placeholder="Keterangan">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-8">
                            <div class="icheck-primary">
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">SIMPAN</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>
                    <!-- /.form-box -->
                  </div><!-- /.card -->
                </div>
          </div>
    </div>
@endsection