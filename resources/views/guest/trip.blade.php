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

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">

        @include('partials/_sidebar_guest')

        <div id="content">

            @include('partials/_navbar_guest')

            <div class="container">
              <h5>Paket Trip (3 Ray)</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th rowspan="2" style="vertical-align : middle;text-align:center;">Rute</th>
                    <th colspan="4" class="text-center">Price</th>
                    <th style="vertical-align : middle;text-align:center;" rowspan="2">Order</th>
                  </tr>
                  <tr>
                    <th>USD</th>
                    <th>SGD</th>
                    <th>Ringgit</th>
                    <th>Rupiah</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($trip as $data)
                  <tr>
                    <td>{{ $data->route_start }} - {{ $data->destination }}</td>
                    <td>${{ $data->price_3_ray }}</td>
                    <td>@php $sing = $data->price_3_ray * $sgd; @endphp SGD {{number_format(($sing),2,',','.')}}</td>
                    <td>@php $rm = $data->price_3_ray * $myr; @endphp RM {{number_format(($rm),2,',','.')}}</td>
                    <td>@php $rupiah = $data->price_3_ray * $idr; @endphp Rp {{number_format(($rupiah),0,',','.')}}</td>
                    <td><a href="{{ url('trip/order/3/'. $data->id) }}" class="btn btn-sm btn-warning form-control">Order</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="container" style="margin-top:7%">
              <h5>Paket Trip (2 Ray)</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style="vertical-align : middle;text-align:center;" rowspan="2">Rute</th>
                    <th colspan="4" class="text-center">Price</th>
                    <th style="vertical-align : middle;text-align:center;" rowspan="2">Order</th>
                  </tr>
                  <tr>
                    <th>USD</th>
                    <th>SGD</th>
                    <th>Ringgit</th>
                    <th>Rupiah</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($trip as $data)
                  <tr>
                    <td>{{ $data->route_start }} - {{ $data->destination }}</td>
                    <td>${{ $data->price_2_ray }}</td>
                    <td>@php $sing = $data->price_2_ray * $sgd; @endphp SGD {{number_format(($sing),2,',','.')}}</td>
                    <td>@php $rm = $data->price_2_ray * $myr; @endphp RM {{number_format(($rm),2,',','.')}}</td>
                    <td>@php $rupiah = $data->price_2_ray * $idr; @endphp Rp {{number_format(($rupiah),0,',','.')}}</td>
                    <td><a href="{{ url('trip/order/2/'. $data->id) }}" class="btn btn-sm btn-warning form-control">Order</a></td>
                  </tr>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
