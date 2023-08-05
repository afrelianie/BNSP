<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Web Wisata</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/img/logo1.jpg" />


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">
</head>

<style>
    body {
        background-image: url("");
    }
</style>

<body class="hold-transition login-page">

    @include('template.notif')

    <div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ url('/') }}" class="h1"><b>JTT</b> <br>Silakan Login</a>
        </div>

        <div class="card-body">
            <form action="{{ url('proses_login') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" class="form-control" class="form-control @error('email') is-invalid @enderror form-control-lg" id="email" placeholder="Masukkan email" name="email" required>
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user">

                        </span>
                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" placeholder="Password" required autocomplete="current-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                </div>
            </form>

            <div class="row">
                <div class="col-6">
                <div class="icheck-primary">
                    <label for="agreeTerms">
                        <a href="{{ url('register') }}">Daftar Segera</a>
                    </label>
                </div>
                </div>
                <div class="col-6">
                <div class="icheck-primary">
                    <label for="agreeTerms">
                        <a href="{{ url('lupaSandi') }}">Lupa Password?</a>
                    </label>
                </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <!-- jQuery -->
    <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
</body>
</html>


