 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('/') }}">
        <div class="sidebar-brand-icon rotate-n-15 w-100 p-2">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{ url('img/1.png') }}" class="img-fluid img-thumbnail rounded-circle w-100 p-1">
        </div>
        <div class="sidebar-brand-text mx-3">Kominfo <sup>Persandian</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - SKPA -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('/') }}">
          <i class="fas fa-fw fa-home"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Nav Item - SKPA -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('spka.index') }}">
          <i class="fas fa-fw fa-building"></i>
          <span>DATA SKPA</span></a>
      </li>
      <!-- Nav Item - Email -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('data-email.index') }}">
          <i class="fas fa-fw fa-inbox"></i>
          <span>DATA EMAIL</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
