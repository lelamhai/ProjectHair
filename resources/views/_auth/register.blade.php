<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
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

    <form method="POST" action="/authRegister">
        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>


<body>

    <main>
        <div class="container">
            <div class="wrap-form">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#log-in">Đăng Nhập</a></li>
                    <li class="active"><a href="{{route('getRegister')}}">Đăng Kí</a></li>
                </ul>
                <div class="logo">
                    <img src="assets/img/Log/log-30shine-white.9945e644.jpg" alt="" />
                </div>
                <div class="tab-content">
                    <div id="sign-up" class="tab-pane fade in active">
                        <div class="form-container sign-up-container">
                            <form id="sign-up-form" method="POST" action="/authRegister">
                                @csrf
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_user.png" alt="">
                                    </div>
                                    <input type="text" placeholder="Họ Tên" id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_phone.png" alt="">
                                    </div>
                                    <input type="text" placeholder="Số Điện Thoại" id="phone" type="tel" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus />
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_letter.png" alt="">
                                    </div>
                                    <input type="email" placeholder="Email" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_lock.png" alt="">
                                    </div>
                                    <input placeholder="Mật Khẩu" id="pass" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="account-input">
                                    <div class="icon-form">
                                        <img src="assets/img/Log/icon_lock.png" alt="">
                                    </div>
                                    <input type="password" placeholder="Nhập Lại Mật Khẩu" class="last-child" id="repass" name="password_confirmation" required autocomplete="new-password" />

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

    <!-- <form method="POST" action="/authRegister">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>

            <div class="col-md-6">
                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form> -->


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>


</body>

</html>