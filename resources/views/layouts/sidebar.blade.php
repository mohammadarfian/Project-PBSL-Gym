<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('adminhome') ? 'active' : '' }}"
           aria-current="page" href="/adminhome">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" 
            href="/dashboard/view">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Member
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('coach*') ? 'active' : '' }}" 
            href="/coach/view">
            <span data-feather="users" class="align-text-bottom"></span>
            Coach
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('paket*') ? 'active' : '' }}" 
          href="/paket/view">
            <span data-feather="layers" class="align-text-bottom"></span>
            Paket
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('jadwal*') ? 'active' : '' }}" 
          href="/jadwal/view">
            <span data-feather="file" class="align-text-bottom"></span>
            Jadwal
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Transaksi
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Reports
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Integrations
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>