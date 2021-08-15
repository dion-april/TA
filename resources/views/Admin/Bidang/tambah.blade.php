@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body register-card-body">
                  <h2><p class="login-box-msg">Tambah data bidang</p></h2>
            
                  <form action="{{route('bidang.save')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <select class="form-control custom-select" name="bidang">
                                <option selected disabled>bidang</option>
                                <option value="perdagangan">Perdagangan</option>
                                <option value="industri">Industri</option>
                                <option value="pasar">Pasar</option>
                                <option value="metrologi">Metrologi</option>
                        </select>
                        <div class="input-group-append">
                          <div class="input-group-text">
                          </div>
                        </div>
                      </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="nip" placeholder="NIP">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="sk" placeholder="Surat Keterangan">
                        <div class="input-group-append">
                          <div class="input-group-text">
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                          <input type="date" name="tahun_menjabat" class="form-control" placeholder="Tanggal Menjabat">
                          <div class="input-group-append">
                          <div class="input-group-text">
                          </div>
                      </div>
                  </div>
                  <div class="input-group mb-3">
                    <select class="form-control custom-select" name="status">
                            <option selected disabled>Status</option>
                            <option>aktif</option>
                            <option>non-aktif</option>
                    </select>
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