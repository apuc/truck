<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://www.getruck.co.il/">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>Login</title>

    <link rel="manifest" href="manifest.json">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/ionic-ion-drawer/ionic.contrib.drawer.css">
    <link href="css/style.css" rel="stylesheet">
{{--    <link href="/resources/css/style.css" rel="stylesheet">--}}
    <script src="/node_modules/inputmask/dist/jquery.inputmask.bundle.js"></script>


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3.exp&libraries=places&language=iw&key=AIzaSyA2C9OGHn8Z55r33e3pR4HbpuRp3XOMN-s"></script>

</head>
    <body>
        @yield('login-content')
        @yield('register-content')
    </body>
</html>
