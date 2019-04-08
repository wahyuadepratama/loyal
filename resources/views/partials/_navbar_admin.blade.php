<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="/admin"><img src="{{asset('storage/logo.png')}}" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="/admin"><img src="{{asset('storage/logo.png')}}" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown" id="notif">
          <h6 class="p-3 mb-0">Tidak ada orderan</h6>
          <div class="dropdown-divider"></div>
        </div>
      </li> -->

      <script type="text/javascript">

        function soundNotif() {
          $.ajax({
            url: '/admin/notification',
            data: "",
            dataType: 'json',
            success: function(rows)
            {
              if(rows.length > 0){
                var audio = new Audio('/sound/notif.mp3');
                audio.play();
                Swal.fire({
                  title: 'You got new order!',
                  animation: false,
                  confirmButtonText: 'Cek Now',
                  customClass: {
                    popup: 'animated tada'
                  }
                }).then(function(){
                  window.location = "/admin/order";
                });
              }
            }
          });
        } setInterval(soundNotif, 30000);

        // function doDate(){
        //
        //   $.ajax({
        //     url: '/admin/notification',
        //     data: "",
        //     dataType: 'json',
        //     success: function(rows)
        //     {
        //       if(rows.length > 0){
        //         element = document.getElementById('notificationDropdown');
        //         element.classList.add('count-indicator');
        //
        //         result = '';
        //         for(var i in rows){
        //           var row = rows[i];
        //           notif = '<a href="/admin/order" class="dropdown-item preview-item"><div class="preview-thumbnail"><div class="preview-icon bg-danger"><i class="mdi mdi-new-box"></i></div></div><div class="preview-item-content d-flex align-items-start flex-column justify-content-center"><h6 class="preview-subject font-weight-normal mb-1">New Order</h6><p class="text-gray ellipsis mb-0">'+ row.customer + ', ' + row.package.route_start + ' - ' + row.package.destination +'</p></div></a><div class="dropdown-divider"></div>';
        //           result = result.concat(notif);
        //         }
        //
        //       }else{
        //         element = document.getElementById('notificationDropdown');
        //         element.classList.remove('count-indicator');
        //         result = '<h6 class="p-3 mb-0">Tidak ada orderan</h6><div class="dropdown-divider"></div>';
        //       }
        //
        //       // console.log(result);
        //       document.getElementById("notif").innerHTML = result;
        //     }
        //   });
        // } setInterval(doDate, 5000);

      </script>

      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="{{asset('theme/images/faces/face1.jpg')}}" alt="image">
            <span class="availability-status online"></span>
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black">Admin</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              Logout
          </a>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
