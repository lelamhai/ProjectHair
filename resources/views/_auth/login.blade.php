<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <!-- Font, Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/Cart/reset.css" />
    <link rel="stylesheet" href="assets/css/Log/log.css" />


    <!-- JS -->
    <script src="assets/js/login.js"></script>
</head>

<body>

    @if (session('status'))
    <div class="alert alert-info">{{session('status')}}</div>
    @endif
    @if (isset($result))
    {{$result}}

    @endif



    <?php

    if (isset($keyName)) {
        var_dump($keyName);
    }
    ?>
    <main>
        <div class="container">
            <div class="wrap-form">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#log-in">Đăng Nhập</a></li>
                    <li><a href="{{route('getRegister')}}">Đăng Kí</a></li>
                </ul>
                <div class="logo">
                    <img src="assets/img/Log/log-30shine-white.9945e644.jpg" alt="" />
                </div>
                <div class="tab-content">
                    <div id="log-in" class="tab-pane fade in active">
                        <div class="form-container sign-in-container">
                            <form method="POST" action="/login" id="sign-in-container">
                                @csrf
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_letter.png" alt="">
                                    </div>
                                    <input id="phone" placeholder="Email" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus/>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_lock.png" alt="">
                                    </div>
                                    <input placeholder="Mật Khẩu" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="cappcha-input">
                                    <div id="divGenerateRandomValues"></div>
                                    <input type="text" id='txtInput' />
                                </div>
                                <p class="forgot" id="slidedown">Forgot your password?</p>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                <button class="signIn-form-button" id="btn-log-in" type="button">Sign In</button>
                            </form>
                        </div>
                        <div class="hide" id="forgot">
                            <form action="" class="form-container">
                                <div class="enter-email">
                                    <div class="enter-email-detail">
                                        <h3>Quên mật khẩu</h3>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="assets/img/Log/icon_letter.png" alt="">
                                            </div>
                                            <input type="email" placeholder="Email" />
                                        </div>
                                        <div class="">
                                            <button class="signIn-form-button">Send</button>
                                            <p id="slideup" style="cursor: pointer"><u>close</u></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="sign-up" class="tab-pane fade">
                        <div class="form-container sign-up-container">
                            <form action="#" id="sign-up-form">
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_user.png" alt="">
                                    </div>
                                    <input type="text" placeholder="Họ Tên" id="name" />
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_phone.png" alt="">
                                    </div>
                                    <input type="text" placeholder="Số Điện Thoại" id="phone" />
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_letter.png" alt="">
                                    </div>
                                    <input type="email" placeholder="Email" id="email" />
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_lock.png" alt="">
                                    </div>
                                    <input type="password" placeholder="Mật Khẩu" id="pass" />
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_lock.png" alt="">
                                    </div>
                                    <input type="password" placeholder="Nhập Lại Mật Khẩu" class="last-child" id="repass" />
                                </div>
                                <div class="cappcha-input">
                                    <div id="divGenerateRandomValues1"></div>
                                    <input type="text" id='txtInput1' />
                                </div>
                                <button class="mt-3 signUp-form-button" id="btn-sign-up" type="button">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
                </section>
            </div>
    </main>

    <!-- <form method="POST" action="/login">
        @csrf
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div> -->

    <!-- <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div> -->

    <!-- <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif 
            </div>
        </div>

    </form> -->
</body>

</html>