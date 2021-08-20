@extends('pegawai.template')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Event</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @foreach ($events as $item)
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card shadow-sm" style="border: none; border-top:3px solid #126afe;border-bottom:3px solid #126afe; border-radius:20px ">
                        <div class="card-header py-2">
                            <h5 class="font-weight-bold text-center">{{$item->judul}}</h5>
                        </div>
                        <div class="card-body">
                            <div class="keterangan">
                                <p class="text-left">
                                    {{$item->keterangan}}
                                </p>
                            </div>
                        </div>
                        <div class="card-footer" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px; ">
                            @php
                                $tgl = \Carbon\Carbon::parse($item->tanggal_pelaksanaan);
                            @endphp
                            <div class="float-left">
                                <span class="text-secondary" style="font-size: 14px"><i class="far fa-clock mr-2"></i>{{$tgl->isoFormat('d, MMM Y') }} {{$item->waktu_pelaksanaan}}</span>
                            </div>
                            <div class="float-right">
                                <a href="#" class="text-secondary"  onclick="seeLocation('{{$item->lokasi}}')" style="text-decoration: none !impoertant"><i class="fas fa-map-marked-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="modal fade" id="modal-lokasi">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Lokasi Event</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="text-location"></p>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@push('custom-js')
  <script>
      const seeLocation  = (location) => {
        $('#text-location').text(location);
        $('#modal-lokasi').modal('show');
      }
  </script>
@endpush