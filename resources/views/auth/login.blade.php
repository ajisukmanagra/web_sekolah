<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('LOGO/logo.png') }}">
    <title>APLIKASI INPUTAN DATA | LOGIN</title>

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

        #login form {
            width: 250px;
        }

        #login,
        .logo {
            display: inline-block;
            width: 40%;
        }

        #login {
            border-right: 1px solid #fff;
            padding: 0px 22px;
            width: 59%;
        }

        .logo {
            color: #fff;
            font-size: 50px;
            line-height: 125px;
        }

        #login form span.fa {
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

        #login form input {
            height: 50px;
        }

        fieldset {
            padding: 0;
            border: 0;
            margin: 0;

        }

        #login form input[type="text"],
        input[type="password"],
        input[type="email"] {
            background-color: #fff;
            border-radius: 0px 3px 3px 0px;
            color: #000;
            margin-bottom: 1em;
            padding: 0 16px;
            width: 200px;
        }

        #login form input[type="submit"] {
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

        #login form input[type="submit"]:hover {
            background-color: #d44179;
        }

        #login>p {
            text-align: center;
        }

        #login>p span {
            padding-left: 5px;
        }

        .middle {
            display: flex;
            width: 600px;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="container">
            <h2 class="text-center text-white">SMK NURUL ISLAM</h2>
            <h5 class="text-center text-white">APLIKASI INPUTAN DATA</h5>
            <center>
                <div class="middle mt-5">
                    <div id="login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset class="clearfix">

                                <p>
                                    <span class="fa fa-envelope"></span>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                </p>

                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Kata sandi">
                                </p>

                                <div>
                                    <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Lupa Password?</a></span>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Masuk"></span>
                                </div>

                            </fieldset>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logo">
                        <img src="{{ asset('img/logo-smk.png') }}" alt="" width="70%">
                        <div class="clearfix"></div>
                    </div>

                </div>
            </center>
        </div>

    </div>

</body>

</html>
