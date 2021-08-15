<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin-source/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <p>Dinas Perdagangan dan Perindustrian</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                  <i class="fa fa-tachometer" aria-hidden="true"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="{{route('pegawai.index')}}" class="nav-link">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>
                Data Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('file.index')}}" class="nav-link">
              <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Penyimpanan File
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview">
              <a href="{{route('surat.index')}}" class="nav-link">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <p>
                  Surat
                </p>
              </a>
             <li class="nav-item has-treeview">
                <a href="{{route('event.index')}}" class="nav-link">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <p>
                     event
                    </p>
                 </a>
                 <li class="nav-item has-treeview">
                  <a href="#  " class="nav-link">
                    <i class="fa fa-university" aria-hidden="true"></i>
                      <p>
                       Bidang
                      </p>
                   </a>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fa fa-barcode" aria-hidden="true"></i>
                  <p>
                    Barcode
                  </p>
                </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>