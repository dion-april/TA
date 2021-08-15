@extends('template')

@section('content')
    <div class="container px-4 pt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body register-card-body">
                      <h2><p class="login-box-msg">Edit Event</p></h2>
                
                      <form action="{{route('event.update',$event->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $event->judul }}" name="judul" placeholder="Judul">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $event->keterangan }}" name="keterangan" placeholder="Keterangan">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" value="{{ $event->tanggal_pelaksanaan }}" name="tanggal pelaksanaan" placeholder="Tanggal Pelaksanaan">
                          <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ $event->waktu_pelaksanaan }}" name="waktu_pelaksanaan" placeholder="Waktu Pelaksanaan">
                            <div class="input-group-append">
                              <div class="input-group-text">
                              </div>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ $event->lokasi }}" name="lokasi" placeholder="Lokasi">
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