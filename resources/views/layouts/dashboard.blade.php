<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://www.getruck.co.il/">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>GeTruck</title>

    <link rel="manifest" href="manifest.json">

    <!-- un-comment this code to enable service worker
    <script>
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
          .then(() => console.log('service worker installed'))
          .catch(err => console.log('Error', err));
      }
    </script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/ionic-ion-drawer/ionic.contrib.drawer.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
    <link href="css/ionic.app.css" rel="stylesheet">
    -->

    <!-- ionic/angularjs js -->
    <script src="lib/ionic/js/ionic.bundle.js"></script>
    <script src="lib/ionic-ion-drawer/ionic.contrib.drawer.js"></script>

    <script src="lib/ngCordova/dist/ng-cordova.min.js"></script>
    <!-- cordova script (this will be a 404 during development) -->
    <script src="cordova.js"></script>

    <!-- your app's js -->
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/services/HttpService.js" type="text/javascript"></script>
    <script src="js/controllers.js" type="text/javascript"></script>
    <script src="js/controllers/HomeCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/ForgotCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/UserLoginCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/UserDashboardCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/UserProfileCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/OrderCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/UserOrdersListCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/UserOldOrdersCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverLoginCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverDashboardCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverProfileCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverMoneyEarnCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverOldJobsCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverCarsListCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverSearchCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverOrdersListCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/DriverOldOrdersCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/PaymentCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/ThankyouCtrl.js" type="text/javascript"></script>
    <script src="js/controllers/InboxCtrl.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3.exp&libraries=places&language=iw&key=AIzaSyA2C9OGHn8Z55r33e3pR4HbpuRp3XOMN-s"></script>
    <script src="lib/ionic-datepicker/dist/ionic-datepicker.bundle.min.js"></script>
    <link href="css/datepickerstyle.css" rel="stylesheet">

</head>
<body>

    @yield('content-dashboard')

</body>
</html>
