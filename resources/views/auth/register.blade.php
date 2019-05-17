<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Safa Guesthouse | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="height:auto; background-image: linear-gradient(to right,#67B26F 0%,#3fada8 100%);">
    <div class="login-box">
        <div class="login-logo">
            <a href="#" style="color: white">SAFA<b> Guesthouse</b></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Register</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span> @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span> @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span> @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span> @endif
                </div>
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span> @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span> @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{ asset('template/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('template/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
