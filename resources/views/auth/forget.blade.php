


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Wisata | Forgot Password</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('/') }}/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ url('/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('/') }}/dist/css/adminlte.min.css">

        <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url("gambar/gambar1.jpg");
        }
    </style>

    </head>


    <body class="hold-transition login-page">
        @include('template.notif')
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ url('/') }}" class="h1"><b>Web </b>Wisata</a>
                </div>
                <div class="card-body">    
                    <p class="login-box-msg">Kamu Lupa Password? Disini silakan Konfirmasi email anda terlebih dahulu.</p>
                
                    <form method="POST" action="{{ url('konfirPassword')}}">
                            @csrf

                        <div class="input-group mb-3">
                            <input class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"  type="text" placeholder="Konfirmasi email ..." name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
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
                <!-- /.login-card-body -->
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


