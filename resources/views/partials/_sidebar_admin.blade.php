<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{asset('theme/images/faces/face1.jpg')}}" alt="profile">
          <span class="login-status online"></span> <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Admin</span>
          <span class="text-secondary text-small">Loyal Family</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin') }}'">
        <span class="menu-title">Home</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/driver','admin/driver/*') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin/driver') }}'">
        <span class="menu-title">Driver</span>
        <i class="mdi mdi-account-multiple menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/order', 'admin/order/*') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin/order') }}'">
        <span class="menu-title">Pemesanan</span>
        <i class="mdi mdi-car menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/travel','admin/travel/*') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin/travel') }}'">
        <span class="menu-title">Perjalanan</span>
        <i class="mdi mdi-trending-up menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/payment','admin/payment/*') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin/payment') }}'">
        <span class="menu-title">Pembayaran</span>
        <i class="mdi mdi-wallet menu-icon"></i>
      </a>
    </li>
    <li class="nav-item {{ Request::is('admin/gallery','admin/gallery/*') ? 'active' : '' }}">
      <a class="nav-link" href="#" onclick="location.href = '{{ url('admin/gallery') }}'">
        <span class="menu-title">Gallery</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

  </ul>
</nav>
