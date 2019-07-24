@extends('layouts.app')

@section('content')


    <ion-header-bar class="bar-clear bar bar-header" align-title="center" style="background-image: url('img/header-bg.jpg')"><div class="buttons buttons-left header-item"><span class="left-buttons">
            <img id="infobutton" src="img/logo-small.png" style="padding-left: 5px;">
        </span></div><div class="title title-center header-item" style="left: 112px; right: 112px;"></div><div class="buttons buttons-right header-item"><span class="right-buttons">
            <img src="img/navicon.png" style="width: 35px; margin-right: 5px;" ng-click="toggleDrawer()">
                <!--            <img src="img/close.png" style="width: 40px; margin: 5px;" ng-click="closeLogin()" />-->
        </span></div>
    </ion-header-bar>
    <ion-nav-bar class="bar-clear nav-bar-container" style="background: none;" nav-bar-transition="ios" nav-bar-direction="forward" nav-swipe="">
        <!--            <ion-nav-back-button>
                    </ion-nav-back-button>-->
        <ion-nav-buttons side="left" class="hide"></ion-nav-buttons>
        <ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
        <div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item" style=""><span class="left-buttons">
                <img ng-show="infobutton" src="img/info.png" style="width: 40px; height: 85%; margin: 5px;" ng-click="showhideInfo()">
                <img ng-show="closebutton" src="img/close.png" style="width: 40px; height: 85%; margin: 5px;" ng-click="showhideInfo()" class="ng-hide">
            </span></div><div class="title title-center header-item" style="transform: translate3d(0px, 0px, 0px); left: 65px; right: 65px;"></div><div class="buttons buttons-right header-item" style=""><span class="right-buttons">
                <img src="img/navicon.png" style="width: 40px; padding-right: 5px;" ng-click="toggleDrawer()">
            </span></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="cached"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item" style="opacity: 0;"><span class="left-buttons">
                <img ng-show="infobutton" src="img/info.png" style="width: 40px; height: 85%; margin: 5px;" ng-click="showhideInfo()">
                <img ng-show="closebutton" src="img/close.png" style="width: 40px; height: 85%; margin: 5px;" ng-click="showhideInfo()" class="ng-hide">
            </span></div><div class="title title-center header-item" style="left: 65px; right: 65px; transform: translate3d(-668px, 0px, 0px); opacity: 0;"></div><div class="buttons buttons-right header-item" style="opacity: 0;"><span class="right-buttons">
                <img src="img/navicon.png" style="width: 40px; padding-right: 5px;" ng-click="toggleDrawer()">
            </span></div></ion-header-bar></div></ion-nav-bar>
    <ion-nav-view name="menuContent" class="view-container" nav-view-transition="ios" nav-view-direction="forward" nav-swipe=""><ion-view view-title="" class="page-background pane" state="app.home" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px;">
            <ion-content align="center" padding="true" scroll="true" overflow-scroll="true" ng-class="{ isBrowserView : isBrowser == true } " class="scroll-content ionic-scroll overflow-scroll  has-header"><div class="scroll padding">

                    <table class="mobile" border="0" width="100%">
                        <tbody>
                        <tr>
                            <td>
                                <img src="img/group.png" style="width: 48%;" ui-sref="app.userlogin({type: 'user'})" href="#/app/userlogin:?type=user"></td>
                        </tr>
                        <tr>
                            <td><h3 style="color:#fff;">הזמנת הובלה</h3></td>
                        </tr>
                        <tr>
                            <td><img src="img/shadow-logo.png" style="width: 75%;"></td>
                        </tr>
                        <tr>
                            <td><h3 style="color:#fff;padding-top: 10px;"> כניסת מובילים</h3></td>
                        </tr>
                        <tr>
                            <td><img src="img/van.png" style="width: 48%;" ui-sref="app.driverlogin({type: 'driver'})" href="#/app/driverlogin:?type=driver"></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="desktop" style="height: 80vh;">
                        <table style="display: block; position: absolute; top: 25%;" border="0" width="100%">
                            <tbody>
                            <tr>
                                <td width="30%">
                                    <a href="{{route('shipper-log')}}" >
                                        <img src="img/group.png" style="width: 60%;">
                                    </a>
                                </td>
                                <td width="40%" rowspan="2"><img src="img/shadow-logo.png" style="width: 75%;"></td>
                                <td width="30%">
                                    <a href="{{route('carrier-log')}}">
                                        <img src="img/van.png" style="width: 60%;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><h3 style="color:#fff; font-size: 2.5em;">הזמנת הובלה</h3></td>
                                <td><h3 style="color:#fff; font-size: 2.5em; padding-top: 10px;"> כניסת מובילים</h3></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div></ion-content>
        </ion-view><ion-view style="background-image: url(&quot;img/header-bg.jpg&quot;); background-repeat: no-repeat; background-size: 100% 56px; opacity: 0.9; box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px; transform: translate3d(-33%, 0px, 0px);" class="pane" state="app.driverlogin" nav-view="cached">

            <ion-nav-bar class="bar-clear nav-bar-container hide" style="background: none;" nav-bar-transition="ios" nav-bar-direction="back" nav-swipe="">
                <!--        <ion-nav-back-button>
                        </ion-nav-back-button>-->
                <ion-nav-buttons side="left" class="hide"></ion-nav-buttons>
                <ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
                <div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item" style=""><span class="left-buttons">
            <img id="infobutton" src="img/logo-small.png" style="padding-left: 5px;">
        </span></div><div class="title title-center header-item" style="transform: translate3d(0px, 0px, 0px); left: 112px; right: 112px;"></div><div class="buttons buttons-right header-item" style=""><span class="right-buttons">
            <img src="img/navicon.png" style="width: 35px; margin-right: 5px;" ng-click="toggleDrawer()">
                                <!--            <img src="img/close.png" style="width: 40px; margin: 5px;" ng-click="closeLogin()" />-->
        </span></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="cached"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item" style="opacity: 0;"><span class="left-buttons">
            <img id="infobutton" src="img/logo-small.png" style="padding-left: 5px;">
        </span></div><div class="title title-center header-item" style="transform: translate3d(698px, 0px, 0px); opacity: 0;"></div><div class="buttons buttons-right header-item" style="opacity: 0;"><span class="right-buttons">
            <img src="img/navicon.png" style="width: 35px; margin-right: 5px;" ng-click="toggleDrawer()">
                                <!--            <img src="img/close.png" style="width: 40px; margin: 5px;" ng-click="closeLogin()" />-->
        </span></div></ion-header-bar></div></ion-nav-bar>

            <ion-content scroll="true" overflow-scroll="true" style="background-color: #fff;" ng-class="{ isBrowserView : isBrowser == true } " class="scroll-content ionic-scroll overflow-scroll  has-header"><div class="scroll">

                    <div id="loginpage" style="padding: 10px;" align="center">
                        <img src="img/van-login.png" style="width: 150px;">
                        <p style="font-size: 30px;margin-top: -15px;">כניסת נהגים</p>
                        <p style="font-size: 20px;">לקוח קיים</p>
                        <br>
                        <table class="myTable">
                            <tbody><tr>
                                <td colspan="2">
                                    <label class="item item-input">
                                        <input type="email" placeholder="שם משתמש" ng-model="loginData.email" class="ng-valid ng-valid-email ng-not-empty ng-dirty ng-touched" style="">
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label class="item item-input">
                                        <input type="password" placeholder="סיסמא" ng-model="loginData.password" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" style="">
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2">
                                    <button ng-click="doLogin()" style="height: 85px; width: 120px; background-image: url('img/button.jpg'); background-repeat: no-repeat; background-size: 100% 100%; border-radius: 10px;" class="button"></button>
                                </td>
                                <td align="right">
                                    <p style="font-size: 16px; padding-right: 55px;"> זכור אותי<br>ממכשיר זה</p>
                                    <!--<img src="img/checkbox.png" style="width: 50px; float: right; margin-top: -50px" />-->
                                    <div class="checkbox_wrapper">
                                        <input type="checkbox" ng-model="loginData.remember" class="ng-pristine ng-untouched ng-valid ng-empty" style="">
                                        <label></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <p style="font-size: 16px; cursor: pointer;" ui-sref="app.forgot" href="#/app/forgot">?שכחת פרטי התחברות</p>
                                </td>
                            </tr>
                            </tbody></table>
                        <br>
                        <br>
                        <br>
                        <p style="font-size: 20px;">?עדיין לא רשום<img src="img/van-blue.png" style="width: 50px;"></p>
                        <p style="font-size: 30px; cursor: pointer;" ng-click="openRegisterPage();">להרשמה לחץ כאן</p>
                    </div>


                </div></ion-content>
        </ion-view><ion-view style="background-image: url(&quot;img/header-bg.jpg&quot;); background-repeat: no-repeat; background-size: 100% 56px; opacity: 0.9; box-shadow: rgba(0, 0, 0, 0) 0px 0px 10px; transform: translate3d(-33%, 0px, 0px);" class="pane" state="app.driverdashboard" nav-view="cached">

            <ion-nav-bar class="bar-clear nav-bar-container hide" style="background: none;" nav-bar-transition="ios" nav-bar-direction="forward" nav-swipe="">
                <!--        <ion-nav-back-button>
                        </ion-nav-back-button>-->
                <ion-nav-buttons side="left" class="hide"></ion-nav-buttons>
                <ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
                <div class="nav-bar-block" nav-bar="cached"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item"><span class="left-buttons">
            <img id="infobutton" src="img/logo-small.png" style="padding-left: 5px;">
        </span></div><div class="title title-center header-item"></div><div class="buttons buttons-right header-item"><span class="right-buttons">
            <img src="img/navicon.png" style="width: 35px; margin-right: 5px;" ng-click="toggleDrawer()">
                                <!--            <img src="img/close.png" style="width: 40px; margin: 5px;" ng-click="closeLogin()" />-->
        </span></div></ion-header-bar></div><div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-clear bar bar-header" align-title="center"><div class="buttons buttons-left header-item"><span class="left-buttons">
            <img id="infobutton" src="img/logo-small.png" style="padding-left: 5px;">
        </span></div><div class="title title-center header-item" style="left: 55px; right: 55px;"></div><div class="buttons buttons-right header-item"><span class="right-buttons">
            <img src="img/navicon.png" style="width: 35px; margin-right: 5px;" ng-click="toggleDrawer()">
                                <!--            <img src="img/close.png" style="width: 40px; margin: 5px;" ng-click="closeLogin()" />-->
        </span></div></ion-header-bar></div></ion-nav-bar>

            <ion-content scroll="true" overflow-scroll="true" style="background-color: #fff;" ng-class="{ isBrowserView : isBrowser == true } " class="scroll-content ionic-scroll overflow-scroll  has-header"><div class="scroll">

                    <div id="driverdashboardpage" style="padding: 10px;" align="center">

                        <table class="myTable">
                            <tbody><tr>
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
                            </tbody></table>

                    </div>

                </div></ion-content>
        </ion-view></ion-nav-view>

@endsection
