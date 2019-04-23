<!DOCTYPE html>
<html lang="en">

@include('partials/_head_admin')

<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>

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
            <h3 class="page-title" style="font-size: 85%">
              <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
              Gallery
            </h3>
            <a href="#" data-toggle="modal" data-target="#add_gallery" class="btn btn-sm btn-gradient-info">+ Tambah Gallery</a>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <!-- Modal Avatar -->
                  <div class="modal fade" id="add_gallery" tabindex="-1" role="dialog" aria-labelledby="avatar" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <form action="{{ url('admin/gallery/store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="avatar">Tambah Driver</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="text" name="title" class="form-control" placeholder="Judul" required><br>
                            <input type="file" name="photo" value="Upload Image" class="form-control" required><br>
                            <textarea name="editor1" rows="8" cols="80" required></textarea>
                            <script>
                                    CKEDITOR.replace( 'editor1' );
                            </script>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
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
                            Photo
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($gallery as $data)
                        <tr>
                          <td>
                            <img src="{{asset('storage/gallery/'. $data->photo)}}" alt="image">
                          </td>
                          <td>
                            {{ $data->title }}
                          </td>
                          <td>
                            {!! $data->description !!}
                          </td>
                          <td>
                            <a href="/admin/gallery/destroy/{{ $data->id }}" onclick="return confirm('Hapus Postingan Ini?')" class="btn btn-sm btn-danger">Destroy</a>
                            <a href="#" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#edit_gallery{{ $data->id }}">Edit</a>
                            <!-- Modal Avatar -->
                            <div class="modal fade" id="edit_gallery{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="avatar" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <form action="{{ url('admin/gallery/update/'. $data->id) }}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="avatar">Edit Postingan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <input type="text" name="title" class="form-control" placeholder="Judul" value="{{ $data->title }}"><br>
                                      <textarea name="editor{{ $data->id }}" rows="8" cols="80" required>{!! $data->description !!}</textarea>
                                      <script>
                                              CKEDITOR.replace( 'editor{{ $data->id }}' );
                                      </script>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-success">Save</button>
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
