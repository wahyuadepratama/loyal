<!DOCTYPE html>
<html lang="en">

@include('partials/_head_admin')

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="container">
          <div class="row">
            <div class="auth-form-light text-left p-5">              
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <input class="form-control form-control-lg" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <input class="form-control form-control-lg" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn">
                      {{ __('Login') }}
                  </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      Keep me signed in
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('theme/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('theme/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('theme/js/off-canvas.js')}}"></script>
  <script src="{{asset('theme/js/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>
