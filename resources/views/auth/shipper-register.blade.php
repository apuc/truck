@extends('auth.layouts.auth')

@section('register-content')
    <div id="loginpage" style="padding: 10px;" align="center">
        <img src="img/group-login.png" style="width: 150px;">
        <p style="font-size: 30px;margin-top: -15px;">כניסת לקוחות</p>
        <p style="font-size: 20px;">לקוח קיים</p>
        <br>
        <form method="POST" action="{{ route('register') }}">
            <input type="hidden" name="sh_reg">
            @csrf

            <table class="myTable">
                <tbody>
                <tr>
                    <td colspan="2">
                        <label class="item item-input">
                            <input
                                id="name"
                                type="text"
                                placeholder="name"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                autofocus
                            >

                            @error('email')
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
                            <input
                                id="phone"
                                type="text"
{{--                                placeholder="שם משתמש"--}}
                                placeholder="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}"
                                required
                                autofocus
                                data-inputmask="'mask': '99-9999999'"
                            >

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
                            <input
                                id="password"
                                type="password"
{{--                                placeholder="סיסמא" --}}
                                placeholder="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                            >

                            @error('password')
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
                            <input
                                id="password-confirm"
                                type="password"
                                placeholder="confirm password"
                                class="form-control"
                                name="password_confirmation"
                                required
                            >
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label class="item item-input">
                            <input
                                type="email"
                                placeholder="email"
                                class="form-control"
                                name="email"
                            >
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label class="item item-input">
                            <input
                                type="text"
                                placeholder="Firm"
                                class="form-control"
                                name="firm"
                            >
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
        <p style="font-size: 20px;">?עדיין לא רשום<img src="img/logo-blue.png" style="width: 120px;"></p>
        <p style="font-size: 30px; cursor: pointer;" ng-click="openRegisterPage();">להרשמה לחץ כאן</p>
        <a style="font-size: 30px;" href="{{route('shipper-log')}}">Login shipper</a>
        <br>
        <br>
        <a style="font-size: 30px;" href="{{route('start')}}">Home</a>
    </div>
@endsection
