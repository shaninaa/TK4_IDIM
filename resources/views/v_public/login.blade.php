<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; UD. Sulfi Jaya Shop</title>
  @include('layoutpublic/css_global')
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
                <img src="../assets/img/logoku.png" alt="logo" width="120" class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-normal">UD. Sulfi Jaya Shop</span></h4>
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success')}}
                </div>
                @endif

                @if(session()->has('LoginError'))
                <div class="alert alert-danger" role="alert">
                  {{ session('LoginError')}}
                </div>
                @endif
                <form method="POST" action="/login">
                  @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"" name="email" value="{{ old('email')}}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password"  required>
                    <div class="invalid-feedback">
                    please fill in your password
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a href="auth-forgot-password.html" class="float-left mt-3">
                    Forgot Password?
                    </a>
                    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                    Login
                    </button>
                </div>

                <div class="mt-5 text-center">
                    Belum Punya akun? <a href="/registrasi">Registrasi</a>
                </div>
                </form>
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="../assets/img/gambar.png">
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
