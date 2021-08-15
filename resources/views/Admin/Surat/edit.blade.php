@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body register-card-body">
                  <h2><p class="login-box-msg">Edit Surat</p></h2>
            
                  <form action="{{route('surat.update',$surat->id)}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $surat->jenis_surat }}" name="Jenis_surat" placeholder="Jenis Surat">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $surat->nama_surat }}" name="nama_surat" placeholder="Nama Surat">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $surat->nama_pengirim }}" name="nama_pengirim" placeholder="Nama Pengirim">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $surat->asal_instansi}}" name="asal_instansi" placeholder="Asal Instansi">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" value="{{ $surat->unit_organisasi }}" name="unit_organisasi" placeholder="Unit Organisasi">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" value="{{ $surat->taggal }}" name="tanggal" placeholder="Tanggal">
                      <div class="input-group-append">
                        <div class="input-group-text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
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