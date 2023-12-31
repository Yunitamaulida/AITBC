<!DOCTYPE html>
<html lang="en">  
  <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>TBC Kecerdasan Buatan - {{ucfirst(Request::segment(1))}}</title>
      <link rel = "icon" href = {{ asset('admin/dist/img/AdminLTELogo.png') }}  type = "image/x-icon">
    
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href={{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}>
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href={{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
      <!-- iCheck -->
      <link rel="stylesheet" href={{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
      <!-- JQVMap -->
      <link rel="stylesheet" href={{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}>
      <!-- Theme style -->
      <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css') }}>
      <!-- jsGrid -->
      <link rel="stylesheet" href={{ asset('admin/plugins/jsgrid/jsgrid.min.css') }}>
      <link rel="stylesheet" href={{ asset('admin/plugins/jsgrid/jsgrid-theme.min.css') }}>
      <!-- DataTables -->
      <link rel="stylesheet" href={{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
      <link rel="stylesheet" href={{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
      <link rel="stylesheet" href={{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href={{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
      <!-- Daterange picker -->
      <link rel="stylesheet" href={{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}>
      <!-- summernote -->
      <link rel="stylesheet" href={{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}>
      <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">

      @stack('styles')
    </head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src={{ asset('admin/dist/img/AdminLTELogo.png') }} alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
        </li> --}}
        {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('home') }}" class="nav-link">Contact</a>
        </li> --}}
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link" style="border-color: transparent"  role="button">
              Log Out
            </button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    @auth
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a th:href="${/dashboard}"  class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kecerdasan Buatan</span>
      </a>
      <!-- Sidebar -->
      @include('admin.template.sidebar')
      <!-- /.sidebar -->
    </aside>
    @endauth

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">{{ucfirst(Request::segment(1))}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">{{ucfirst(Request::segment(1))}}</a></li>
                <li class="breadcrumb-item {{(request()->segment(2) === '') ? '' : 'active'}}">{{ucfirst(Request::segment(2))}}</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      @yield('contents')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- ChartJS -->
<script src={{ asset('admin/plugins/chart.js/Chart.min.js') }}></script>
<!-- Sparkline -->
<script src={{ asset('admin/plugins/sparklines/sparkline.js') }}></script>
<!-- JQVMap -->
<script src={{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}></script>
<script src={{ asset('admin/plugins/jqvmap/maps/jquery.vmap.indonesia.js') }}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}></script>
<!-- daterangepicker -->
<script src={{ asset('admin/plugins/moment/moment.min.js') }}></script>
<script src={{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
<!-- Summernote -->
<script src={{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('admin/dist/js/adminlte.js') }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset('admin/dist/js/demo.js') }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset('admin/dist/js/pages/dashboard.js') }}></script>
<!-- jsGrid -->
<script src={{ asset('admin/plugins/jsgrid/demos/db.js') }}></script>
<script src={{ asset('admin/plugins/jsgrid/jsgrid.min.js') }}></script>
<!-- DataTables  & Plugins -->
<script src={{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
<script src={{ asset('admin/plugins/jszip/jszip.min.js') }}></script>
<script src={{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}></script>
<script src={{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}></script>
<script src={{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
<script src={{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>
<script src="{{asset('admin/plugins/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{ asset('admin/plugins/toastr/toastr.min.js') }}"></script>
<!-- Page specific script -->
@stack('scripts')
<script>
  $(function () {
    $("#example0").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,"paging": true,
      "ordering": true,"info": true,"responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,"paging": true,
      "ordering": true,"info": true,"responsive": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
</html>
