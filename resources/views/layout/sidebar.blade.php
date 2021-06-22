<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('projek/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('projek/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                <a href="{{ url('#') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    @if(Auth::user()->role == 1)
                    <li class="nav-item {{ Request::is('siswa')?'btn-primary' : '' }}">
                        <a href="{{ url('siswa') }}" class="nav-link">
                            <span><i class="fas fa-user"></i></span>
                            <p>Manage Siswa</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('kandidat')?'btn-primary' : '' }}">
                        <a href="{{ url('kandidat') }}" class="nav-link">
                            <i class="fas fa-list-ol"></i>
                            <p>List Kandidat</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('set_periode') }}" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                          <p>
                            Set Periode
                          </p>
                        </a>
                      </li>
                    @endif
                    <li class="nav-item {{ Request::is('pemilihan')?'btn-primary' : '' }}">
                    <a href="{{ url('pemilihan') }}" class="nav-link">
                        <i class="fas fa-vote-yea"></i>
                      <p>Voting Kandidat</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ Request::is('grafik')?'btn-primary' : '' }}">
                <a href="{{ url('grafik') }}" class="nav-link">
                    <i class="fas fa-chart-pie"></i>
                  <p>
                    Grafik Voting
                  </p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('voting')?'btn-primary' : '' }}">
                <a href="{{ url('voting') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                  <p>
                    List Voting
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                  <p>
                    Logout

                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
