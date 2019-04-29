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
              Perjalanan
            </h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="data">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Nama Pelanggan
                          </th>
                          <th>
                            Trip
                          </th>
                          <th>
                            Driver
                          </th>
                          <th>
                            Waktu Order
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($travel as $data)
                        <tr>
                          <td>
                            {{ $data->order->id }}
                          </td>
                          <td>
                            {{ $data->order->customer }}
                          </td>
                          <td>
                            @if($data->order->package->name == 'Trip')
                              {{ $data->order->package->route_start }} - {{ $data->order->package->destination }}
                            @else
                              {{ $data->order->package->name }} {{ $data->order->duration }} day
                            @endif
                          </td>
                          <td>
                           {{ $data->driver->name }}
                          </td>
                          <td>
                            @php echo \Carbon\Carbon::parse($data->order->date)->format('l, d F Y'); @endphp
                          </td>
                          <td>
                            <a href="/admin/travel/print/{{$data->id_order}}" class="btn btn-sm btn-gradient-danger btn-icon-text">Cetak <i class="mdi mdi-printer btn-icon-append"></i></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#data').DataTable({
        dom: '<"clear"f><"clear">',
      });
    } );
  </script>
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
