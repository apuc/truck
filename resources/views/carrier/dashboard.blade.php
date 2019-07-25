@extends('layouts.dashboard')

@section('content-dashboard')
    <div id="driverdashboardpage" style="padding: 10px;" align="center">
        <h3>Carrier dashboard</h3>

        <table class="myTable">
            <tbody>
            <tr>
                <td style="padding: 5px; width: 90%" align="right">
                    <!--<h2>חיים כחלון</h2>-->
                    <h2 class="ng-binding">הרצל לא פנוי</h2>
                </td>
                <td width="10%" style="padding: 5px;" align="right"><img src="img/user-grey.png" width="50px"></td>
            </tr>
            <tr ui-sref="app.inbox" ng-show="showParamMsg" href="#/app/inbox" class="ng-hide" style="">
                <td style="padding: 5px; width: 90%" align="right">
                    <!--<h4>ממתינות לך 13 הצעות </h4>-->
                    <h4 class="ng-binding">יש לך 00 הצעות בתהליך</h4>
                </td>
                <td width="10%" style="padding: 5px;" align="right"><img src="img/star-blue.png" width="50px"></td>
            </tr>
            <tr ng-show="showDashboardMsg" class="ng-hide">
                <td style="padding: 5px; width: 90%" align="right">
                    <h4 class="ng-binding"></h4>
                </td>
                <td width="10%" style="padding: 5px;" align="right"><img src="img/star-blue.png" width="50px"></td>
            </tr>
            <tr ng-show="showHideWarning" class="ng-hide">
                <td style="padding: 5px; width: 90%" align="right">
                    <h4>כרטיס נהג עדיין לא אומת</h4>
                    <h5>לפרטים נוספים להשלמת הרישום לחצו כאן</h5>
                </td>
                <td width="10%" style="padding: 5px;" align="right"><img src="img/lock-blue-150x150.png" width="50px"></td>
            </tr>
            </tbody></table>
        <br>
        <table class="myTable" style="border-spacing: 10px; border-collapse: separate;">
            <tbody><tr>
                <td ui-sref="app.driverorderslist" align="center" style="width: 50%; background-color: #ccc;" href="#/app/driverorderslist">
                    <img src="img/home-button1.png" width="80px">
                    <h4 class="menuButtonText">הובלות פעילות</h4>
                </td>
                <td ui-sref="app.driversearch" align="center" style="width: 50%; background-color: #ccc;" href="#/app/driversearch">
                    <img src="img/home-button6.png" width="80px">
                    <h4 class="menuButtonText">חפש הובלות</h4>
                </td>
            </tr>
            <tr>
                <td ui-sref="app.driverprofile" align="center" style="width: 50%; background-color: #ccc;" href="#/app/driverprofile">
                    <img src="img/home-button3.png" width="80px">
                    <h4 class="menuButtonText">כרטיס נהג</h4>
                </td>
                <td ui-sref="app.drivercarslist" align="center" style="width: 50%; background-color: #ccc;" href="#/app/drivercarslist">
                    <img src="img/home-button7.png" width="80px">
                    <h4 class="menuButtonText">הרכבים שלי</h4>
                </td>
            </tr>
            <tr>
                <td ui-sref="app.driveroldorders" align="center" style="width: 50%; background-color: #ccc;" href="#/app/driveroldorders">
                    <img src="img/home-button5.png" width="80px">
                    <h4 class="menuButtonText">הובלות קודמות</h4>
                </td>
                <td align="center" style="width: 50%; background-color: #ccc;">
                    <img src="img/home-button4.png" width="80px">
                    <h4 class="menuButtonText">מצב כספי</h4>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

