<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tour & Travel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('theme/landing/style5.css')}}">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('storage/logo/icon.png') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="wrapper">

        @include('partials/_sidebar_guest')

        <div id="content">

            @include('partials/_navbar_guest')

            <div class="container">
              <h5>Order Private Package ({{$ray}} Ray)</h5><br>

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li> <small>{{ $error }}</small> </li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form method="post" action="{{ url('private/order/'.$ray.'/'.$trip->id) }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Enter phone">
                  <small class="form-text text-muted">We'll never share your phone with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date Order</label>
                  <input name="date" id="datepicker" width="276" />
                  <script>
                      $('#datepicker').datepicker({
                          uiLibrary: 'bootstrap4'
                      });
                  </script>
                  <small class="form-text text-muted">This date is when you need to order this trip.</small>
                </div>
                <div class="form-group">
                  <label>Duration Order</label>
                  <input type="number" name="duration" class="form-control" style="width: 276px !important">
                  <small class="form-text text-muted">Duration rental (day)</small>
                </div><br>
                <button type="submit" class="btn btn-warning form-control">Order Now</button>
              </form>
            </div>

            @include('partials/_footer_guest')

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
