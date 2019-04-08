<!DOCTYPE html>
<html lang="en">

@include('partials/_head_admin')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar -->
    @include('partials/_navbar_admin')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar -->
      @include('partials/_sidebar_admin')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
              Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('theme/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Pesanan
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">{{ $orderWaiting }}</h2>
                  <h6 class="card-text">Pesanan Menunggu</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('theme/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Perjalanan
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">{{ $travel }}</h2>
                  <h6 class="card-text">Total Perjalanan</h6>
                </div>
              </div>
            </div>            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer -->
        @include('partials/_footer_admin')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('theme/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('theme/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->

  <!-- Plugin js for this page-->

  <!-- End plugin js for this page-->

  <!-- inject:js -->
  <script src="{{asset('theme/js/off-canvas.js')}}"></script>
  <script src="{{asset('theme/js/misc.js')}}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{asset('theme/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
