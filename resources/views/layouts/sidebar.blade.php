<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard')}}">E-Report</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('dashboard')}}">ER</a>
      </div>
      <ul class="sidebar-menu">
          <!-- <li class="menu-header">Dashboard</li> -->
          <li class="nav-item dropdown">
            <a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          @if (auth()->user()->roles=="admin")
          <li class="nav-item dropdown">
            <a href="{{route('siswa')}}" class="nav-link"><i class="fas fa-user"></i> <span>Daftar Siswa</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="3" class="nav-link"><i class="fas fa-laptop"></i> <span>Kelas</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="{{route('mapel')}}" class="nav-link"><i class="fas fa-book"></i> <span>Mata Pelajaran</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="{{route('guru')}}" lass="nav-link"><i class="fas fa-graduation-cap"></i> <span>Data Guru</span></a>
          </li>
          @endif
          <li class="nav-item dropdown">
            <a href="{{route('nilai')}}" lass="nav-link"><i class="fas fa-briefcase"></i> <span>Nilai</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" lass="nav-link"><i class="fas fa-graduation-cap"></i> <span>Peringkat</span></a>
          </li>
        </ul>
    </aside>
  </div>