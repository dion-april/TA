
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indag | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 @include('pegawai._partials.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('pegawai._partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('pegawai._partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
 @include('pegawai._partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('pegawai._partials.js')
@stack('custom-js')
</body>
</html>
