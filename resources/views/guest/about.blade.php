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
    <link rel="shortcut icon" href="{{ asset('storage/logo/icon.png') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">

        @include('partials/_sidebar_guest')

        <div id="content">

            @include('partials/_navbar_guest')

            <div class="carousel slide" data-ride="carousel" style="margin: -20px">
              <div class="carousel-inner">
                <div class="carousel-item active effect">
                  <img class="d-block w-100" src="{{ asset('storage/back.jpg') }}" alt="First slide">
                </div>
                <div class="centered" style="text-shadow: 2px 2px 5px blue;"> About Us </div>

                <style media="screen">
                  .effect{
                    transform-origin: 50% 65%;
                    transition: transform 10s, filter 6s ease-in-out;
                    filter: brightness(80%);
                    height: 180px;
                  }.effect:hover{
                    filter: brightness(100%);
                    transform: scale(2);
                  }.centered {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;
                    text-align: center;
                    font-size: 45px;
                  }@media only screen and (max-width: 768px) {
                    .centered{
                      top: 30%;
                      font-size:25px;
                    }
                    .explaination{
                      margin-left: 0%;
                      margin-right: 0%;
                    }
                    .slide{
                      height: 260px;
                    }
                  }
                </style>
              </div>
            </div>


            <p style="margin-right: 17%;margin-left: 17%;margin-top: 5%;margin-bottom: 5%; color:black; font-size:110%" class="explaination text-center font-italic">
              <b>Loyal Family Tour and Travel</b> adalah salah satu biro perjalanan yang berpusatkan di kota padang. siap menyediakan berbagai pelayanan yang berhubungan dengan perjalanan wisata, perjalanan kerja, penginapan dan tiket penerbangan.</p><br>

            <center>
              <h4>Contact Admin</h4><br>

              <div class="row">
                <div class="col-md-2"></div>
                <div class="card col-md-4" style="margin:1%">
                  <div class="card-body">
                    <h5 class="card-title">Ivo</h5>
                    <p class="card-text"><i class="fas fa-phone"></i> <a href=""> +6281277872475</a> </p>
                    <a href="https://wa.me/6281277872475" class="btn btn-success form-control">Chat Via WhatsApp</a><br><br>
                    <a href="tel:6281277872475" class="btn btn-primary form-control">Call Via Phone</a>
                  </div>
                </div>
                <div class="card col-md-4" style="margin:1%">
                  <div class="card-body">
                    <h5 class="card-title">Adel</h5>
                    <p class="card-text"><i class="fas fa-phone"></i> <a href=""> +6281364748491</a> </p>
                    <a href="https://wa.me/6281364748491" class="btn btn-success form-control">Chat Via WhatsApp</a><br><br>
                    <a href="tel:6281277872475" class="btn btn-primary form-control">Call Via Phone</a>
                  </div>
                </div>
                <div class="col-md-1"></div>
              </div>

            </center>

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
