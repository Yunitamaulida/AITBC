<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="{{ url('dashboard') }}" class="d-block">{{ auth()->user()->name }}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item {{(request()->segment(1) == 'dashboard') ? 'menu-open': ''}} ">
        <a href="{{ url('dashboard') }}" class="nav-link {{(request()->segment(1) == 'dashboard') ? 'active': ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      @can('pakar')
      <li class="nav-header">TBC</li>
      <li class="nav-item {{(request()->segment(1) == 'gejala' ||request()->segment(1) == 'penyakit' ||request()->segment(1) == 'kasus') ? 'menu-open': ''}}">
        <a class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Data TBC
            <i class="fas fa-angle-left right"></i>
            {{-- <span class="badge badge-info right">6</span> --}}
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ">
            <a href="{{ url('gejala') }}" class="nav-link {{(request()->segment(1) == 'gejala') ? 'active': ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Gejala</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('penyakit') }}" class="nav-link {{(request()->segment(1) == 'penyakit') ? 'active': ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Penyakit</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('kasus') }}" class="nav-link {{(request()->segment(1) == 'kasus') ? 'active': ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Basis Kasus</p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('diagnosa') }}" class="nav-link {{(request()->segment(1) == 'diagnosa') ? 'active': ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Basis Kasus Diagnosa</p>
            </a>
          </li>
        </ul>
      </li>
      @endcan
      @can('admin')
      <li class="nav-header">Admin</li>
      <li class="nav-item {{(request()->segment(1) == 'user' ||request()->segment(1) == 'pasien' ) ? 'menu-open': ''}}">
        <a class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            Property Admin
            <i class="fas fa-angle-left right"></i>
            {{-- <span class="badge badge-info right">6</span> --}}
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ">
            <a href="{{ url('user') }}" class="nav-link {{(request()->segment(1) == 'user') ? 'active': ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
        </ul>
      </li>
      @endcan
      {{-- <li class="nav-header">Lain - Lain</li> --}}
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>