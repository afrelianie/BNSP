
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bride Story | Recover Password (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        @include('template.notif')
        
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ url('/') }}" class="h1"><b>Bride </b>Story</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('updateSandi', $user->id)}}">
                    @csrf

                        <div class="input-group mb-3">
                            <input class="form-control  form-control-lg @error('old') is-invalid @enderror" value="{{ old('old') }}"  type="password" placeholder="Password baru..." name="old">
                                @error('old')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control  form-control-lg @error('new') is-invalid @enderror" value="{{ old('new') }}"  type="password" placeholder="Konfirmasi Password baru..." name="new">
                                @error('new')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Change password</button>
                        </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-12">
                            <div class="icheck-primary">
                                <label for="agreeTerms">
                                Sudah Punya Akun? <a href="{{ url('login') }}">Ayo Login</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ url('/') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
    </body>
</html>
