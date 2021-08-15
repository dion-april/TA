@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body register-card-body">
                  <h2><p class="login-box-msg">Edit Pegawai</p></h2>
            
                  <form action="{{route('pegawai.update',$pegawai->id)}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->nip }}" name="nip" placeholder="NIP">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->nama_lengkap }}" name="nama_lengkap" placeholder="Nama Lengkap">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->pangkat }}" name="pangkat" placeholder="Pangkat">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->jabatan }}" name="jabatan" placeholder="Jabatan">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->unit_organisasi }}" name="unit_organisasi" placeholder="Unit Organisasi">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $pegawai->keterangan }}" name="keterangan" placeholder="Keterangan">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <select class="form-control custom-select" value="{{ $pegawai->status }}" name="status">
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
              <!-- /.card -->
            </div>
          </div>
    </div>
@endsection