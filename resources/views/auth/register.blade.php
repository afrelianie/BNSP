<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register |Web Wisata</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/img/PTSP.png" />


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

<body class="hold-transition register-page">
    @include('template.notif')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>JTT</b> <br>Registrasi</a>
            </div>
            <div class="card-body">
                <form action="{{ url('proses_register') }}" method="post">
                        @csrf
                    <input type="hidden" name="role" value="user">
                    <div class="input-group mb-3">
                        <input type="text" maxlength="26" minlength="4" class="form-control @error('name') is-invalid @enderror form-control-lg" type="text" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" required placeholder="E-mail" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror form-control-lg" name="no_hp" required placeholder="Tambahkan No HP">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-table"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror form-control-lg" name="alamat" value="{{ old('alamat') }}" required placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-table"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-12">
                        <div class="icheck-primary">
                            <label for="agreeTerms">
                                Sudah Punya Akun? <a href="{{ route('login') }}">Ayo Login</a>
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
