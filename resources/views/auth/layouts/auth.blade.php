<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Login</title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/ionic.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.inputmask.bundle.js')}}"></script>


{{--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3.exp&libraries=places&language=iw&key=AIzaSyA2C9OGHn8Z55r33e3pR4HbpuRp3XOMN-s"></script>--}}

</head>
    <body>
        @yield('login-content')
        @yield('register-content')
    </body>
</html>
