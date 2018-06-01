
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dent History</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html{
            height:100%;
            min-height:100%;
        }
        body{
            background: url('{{asset('img/back.jpg')}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 100%;
            overflow: hidden;
            max-width: 100%;
            width: 100%
            /*position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 125%;
            background-size: cover;*/
        }

        .wrap
        {
            width: 100%;
            height: 100%;
            min-height: 100%;
            vertical-align: middle;
            z-index: 99;
        }

        p.form-title
        {
            font-family: 'Open Sans' , sans-serif;
            font-size: 25px;
            font-weight: 600;
            text-align: center;
            color: #000;
            margin-top: 5%;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        form
        {
            width: 250px;
            margin: 0 auto;
        }

        .inputForm{
            width: 100%;
            margin: 0;
            padding: 5px 10px;
            background-color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-bottom: 1px solid rgba(7, 66, 85, 0.9);
            outline: 0;
            font-style: italic;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: #000;
            outline: 0;
        }

        form.login input[type="text"], form.login input[type="password"]
        {
            width: 100%;
            margin: 0;
            padding: 5px 10px;
            background-color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-bottom: 1px solid rgba(7, 66, 85, 0.9);
            outline: 0;
            font-style: italic;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: #000;
            outline: 0;
        }

        form.login input[type="submit"],form.login input[type="button"]
        {
            width: 100%;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 500;
            margin-top: 16px;
            outline: 0;
            cursor: pointer;
            letter-spacing: 1px;
        }

        form.login input[type="submit"]:hover
        {
            transition: background-color 0.5s ease;
        }

        form.login .remember-forgot
        {
            float: left;
            width: 100%;
            margin: 10px 0 0 0;
        }
        form.login .forgot-pass-content
        {
            min-height: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        form.login label, form.login a
        {
            font-size: 12px;
            font-weight: 400;
            color: #000;
        }

        form.login a
        {
            transition: color 0.5s ease;
        }

        form.login a:hover
        {
            color: #2ecc71;
        }
        .img-login{
            display:block;
            margin:auto;
        }

        .boton{
            width: 100%;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 500;
            margin-top: 16px;
            outline: 0;
            cursor: pointer;
            letter-spacing: 1px;
        }
    </style>

</head>
<body >
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>


