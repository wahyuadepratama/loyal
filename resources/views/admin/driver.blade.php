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
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
              Driver
            </h3>
            <a href="#" data-toggle="modal" data-target="#add_driver" class="btn btn-sm btn-gradient-info">+ Tambah Driver</a>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <!-- Modal Avatar -->
                  <div class="modal fade" id="add_driver" tabindex="-1" role="dialog" aria-labelledby="avatar" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <form action="{{ url('admin/driver/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="avatar">Tambah Driver</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="text" name="name" class="form-control" placeholder="Nama">
                            <input type="text" name="type_car" class="form-control" placeholder="Jenis Kendaraan">
                            <input type="text" name="plate_car" class="form-control" placeholder="Plat No Kendaraan">
                            <input type="text" name="phone" class="form-control" placeholder="No Hp">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            <input type="file" name="photo" value="Upload Avatar" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Upload</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Modal -->

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            Nama
                          </th>
                          <th>
                            Jenis Kendaraan
                          </th>
                          <th>
                            Plat Kendaraan
                          </th>
                          <th>
                            No.Handphone
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($driver as $data)
                        <tr>
                          <td>
                            <img src="{{asset('storage/driver/'. $data->photo)}}" class="mr-2" alt="image">
                            {{ $data->name }}
                          </td>
                          <td>
                            {{ $data->type_car }}
                          </td>
                          <td>
                            {{ $data->plate_car }}
                          </td>
                          <td>
                            {{ $data->phone }}
                          </td>
                          <td>
                            {{ $data->email }}
                          </td>
                          <td>
                            <a href="/admin/driver/destroy/{{ $data->id }}" onclick="return confirm('Hapus Driver Ini?')" class="btn btn-sm btn-danger">Destroy</a>
                            <a href="#" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#edit_driver">Edit</a>
                            <!-- Modal Avatar -->
                            <div class="modal fade" id="edit_driver" tabindex="-1" role="dialog" aria-labelledby="avatar" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <form action="{{ url('admin/driver/update/'. $data->id) }}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="avatar">Tambah Driver</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                                      <input type="text" name="type_car" class="form-control" value="{{ $data->type_car }}">
                                      <input type="text" name="plate_car" class="form-control" value="{{ $data->plate_car }}">
                                      <input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
                                      <input type="text" name="email" class="form-control" value="{{ $data->email }}">
                                      <input type="file" name="photo" value="Upload Avatar" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- End Modal -->
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
