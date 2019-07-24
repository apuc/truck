@extends('auth.layouts.auth')

@section('login-content')
<div id="loginpage" style="padding: 10px;" align="center">
    <img src="img/van-login.png" style="width: 150px;">
    <p style="font-size: 30px;margin-top: -15px;">כניסת נהגים</p>
    <p style="font-size: 20px;">לקוח קיים</p>
    <br>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <table class="myTable">
            <tbody>

            <tr>
                <td colspan="2">
                    <label class="item item-input">
                        <input id="phone" type="text" placeholder="שם משתמש" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('phone') }}" required autofocus>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="item item-input">
                        <input id="password" type="password" placeholder="סיסמא" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </label>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <button
                        type="submit"
                        class="button"
                        style="height: 85px; width: 120px; background-image: url('img/button.jpg'); background-repeat: no-repeat; background-size: 100% 100%; border-radius: 10px;"
                    >
                    </button>
                </td>
                <td align="right">
                    <p style="font-size: 16px; padding-right: 55px;"> זכור אותי<br>ממכשיר זה</p>
                    <!--<img src="img/checkbox.jpg" style="width: 50px; float: right; margin-top: -50px" />-->
                    <div class="checkbox_wrapper">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <p style="font-size: 16px; cursor: pointer;" ui-sref="app.forgot" href="#/app/forgot">?שכחת פרטי התחברות</p>
                </td>
            </tr>

            </tbody>
        </table>
    </form>
    <br>
    <br>
    <br>
    <p style="font-size: 20px;">?עדיין לא רשום<img src="img/van-blue.png" style="width: 50px;"></p>
    <p style="font-size: 30px; cursor: pointer;" ng-click="openRegisterPage();">להרשמה לחץ כאן</p>
    <a style="font-size: 30px;" href="{{route('carrier-reg')}}">Register Carrier</a>
    <br>
    <br>
    <a style="font-size: 30px;" href="{{route('start')}}">Home</a>
</div>

@endsection
