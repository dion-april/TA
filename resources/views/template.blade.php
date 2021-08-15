
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indag | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
 @include('_Partials.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('_Partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('_Partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
 @include('_Partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('_Partials.js')
@stack('custom-js')
</body>
</html>
