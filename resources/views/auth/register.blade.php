<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="{{ asset('LOGO/logo.png') }}">
    <title>APLIKASI INPUTAN DATA | REGISTER</title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        @charset "utf-8";


        @import url //maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);



        div.main {
            background: #2c3e50;
            /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #2c3e50 1%, #1c2b5a 100%);
            /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%, #2c3e50), color-stop(100%, #1c2b5a));
            /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover, #162435 1%, #1c2b5a 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover, #172738 1%, #1c2b5a 100%);
            /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover, #101b27 1%, #1c2b5a 100%);
            /* IE10+ */
            background: radial-gradient(ellipse at center, #1f2b38 1%, #1c2b5a 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0264d6', endColorstr='#1c2b5a', GradientType=1);
            /* IE6-9 fallback on horizontal gradient */
            height: calc(100vh);
            width: 100%;
        }

        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        /* ---------- GENERAL ---------- */

        * {
            box-sizing: border-box;
            margin: 0px auto;

            &:before,
            &:after {
                box-sizing: border-box;
            }

        }

        body {

            color: #606468;
            font: 87.5%/1.5em 'Open Sans', sans-serif;
            margin: 0;
        }

        a {
            color: #eee;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        input {
            border: none;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5em;
            padding: 0;
            -webkit-appearance: none;
        }

        p {
            line-height: 1.5em;
        }

        .clearfix {
            *zoom: 1;

            &:before,
            &:after {
                content: ' ';
                display: table;
            }

            &:after {
                clear: both;
            }

        }

        .container {
            left: 50%;
            position: fixed;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        /* ---------- LOGIN ---------- */

        #register form {
            width: 250px;
        }

        #register,
        .logo {
            display: inline-block;
            width: 40%;
        }

        #register {
            border-right: 1px solid #fff;
            padding: 0px 22px;
            width: 59%;
        }

        .logo {
            color: #fff;
            font-size: 50px;
            line-height: 125px;
        }

        #register form span.fa {
            background-color: #fff;
            border-radius: 3px 0px 0px 3px;
            color: #000;
            display: block;
            float: left;
            height: 50px;
            font-size: 24px;
            line-height: 50px;
            text-align: center;
            width: 50px;
        }

        #register form input {
            height: 50px;
        }

        fieldset {
            padding: 0;
            border: 0;
            margin: 0;

        }

        #register form input[type="text"],
        input[type="password"],
        input[type="email"] {
            background-color: #fff;
            border-radius: 0px 3px 3px 0px;
            color: #000;
            margin-bottom: 1em;
            padding: 0 16px;
            width: 200px;
        }

        #register form input[type="submit"] {
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background-color: #000000;
            color: #eee;
            font-weight: bold;
            /* margin-bottom: 2em; */
            text-transform: uppercase;
            padding: 5px 10px;
            height: 30px;
        }

        #register form input[type="submit"]:hover {
            background-color: #d44179;
        }

        #register>p {
            text-align: center;
        }

        #register>p span {
            padding-left: 5px;
        }

        .middle {
            display: flex;
            width: 600px;
        }
    </style>
    </style>
</head>
<body style="background-color: #2c3e50">
  <center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="img"><img src="{{ asset('LOGO/logo.png') }}" width="150px"></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  </center>

</body>
</html>
