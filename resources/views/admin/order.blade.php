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

          @if(session()->has('message'))
            <div class="alert alert-warning" role="alert">
              {{ session('message') }}
            </div><br>
          @endif

          <div class="page-header">

            <style media="screen">
            @media only screen and (max-width: 768px) {
              .page-title{
                font-size: 13px;
              }
            }
            </style>
            <script type="text/javascript">
              function filter(i) {
                location.href = '/admin/order?filter='+i;
              }
            </script>

            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
              Pemesanan
            </h3>
            <div class="row">
              <div class="col-md-12">
                <select class="form-control" onchange="filter(value)">
                  <option> == Filter == </option>
                  <option value="done"> Status Done </option>
                  <option value="waiting"> Status Waiting </option>
                </select>
              </div>
            </div>
          </div>
          @if(count($order) == 0)
          <div class="alert alert-warning" role="alert">
            Belum ada pesanan!
          </div><br>
          @endif
          
            @foreach($order as $result)
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                      @if($result->package->name == 'Trip')
                        <h5>#{{ $result->id }} ({{ $result->package->route_start }} - {{ $result->package->destination }})  </h5><br><br>
                      @else
                        <h5>#{{ $result->id }} ({{ $result->package->name }})  </h5><br>
                      @endif

                    <div class="row">
                      <div class="col-md-2">
                        <small><b>{{ $result->customer }}</b></small><br>

                      </div>
                      <div class="col-md-2">

                          <small>{{ $result->phone }}</small><br>

                      </div>
                      <div class="col-md-2">

                          <small>{{ $result->email }}</small><br><br>

                      </div>
                      <div class="col-md-2">

                          @if($result->ray == 2)
                            <small><b>Price ${{ $result->package->price_2_ray }}</b> ({{ $result->ray }} Ray)</small><br><br>
                          @else
                            <small><b>Price ${{ $result->package->price_3_ray }}</b> ({{ $result->ray }} Ray)</small><br><br>
                          @endif

                      </div>
                      <div class="col-md-2">

                          <small>@php echo \Carbon\Carbon::parse($result->date)->format('l, d F Y'); @endphp</small><br><br>

                      </div>
                      <div class="col-md-2">

                          @if($result->status == 'waiting')
                            <label data-toggle="modal" data-target="#add_driver" class="btn btn-sm btn-info"><i class="mdi mdi-account-plus btn-icon-append"></i> Ambil</label>
                          @else
                            <label class="btn btn-sm btn-success">Done</label>
                          @endif
                          <!-- Modal Avatar -->
                          <div class="modal fade" id="add_driver" tabindex="-1" role="dialog" aria-labelledby="avatar" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <form action="{{ url('admin/order/take/'. $result->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="avatar">Ambil Pesanan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <select class="form-control" name="driver">
                                      @foreach($driver as $data)
                                      <option value="{{ $data->id }}">{{ $data->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Ambil</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!-- End Modal -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
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
