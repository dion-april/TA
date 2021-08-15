@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body register-card-body">
                      <h2><p class="login-box-msg">Tambah Event</p></h2>
                
                      <form enctype="multipart/form-data" action="{{route('event.save')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="judul" placeholder="Judul">
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
                          <input type="date" class="form-control" name="tanggal_pelaksanaan" placeholder="Tanggal Pelaksanaan">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="waktu_pelaksanaan" placeholder="Waktu Pelaksanaan">
                            <div class="input-group-append">
                              <div class="input-group-text">
                              </div>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
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
@endsection