@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body register-card-body">
                  <h2><p class="login-box-msg">Tambah Surat</p></h2>
            
                  <form action="{{route('surat.save')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <select class="form-control custom-select" name="jenis_surat">
                                <option selected disabled>Jenis</option>
                                <option value="Surat Masuk">Surat Masuk</option>
                                <option value="Surat Keluar">Surat Keluar</option>
                        </select>
                        <div class="input-group-append">
                          <div class="input-group-text">
                          </div>
                        </div>
                      </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="nama_surat" placeholder="Nama Surat">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="nama_pengirim" placeholder="Nama Pengirim">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="asal_instansi" placeholder="Asal Instansi">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                      <div class="input-group mb-3">
                          <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
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