<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('new_asset/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('new_asset/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('new_asset/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('new_asset/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('new_asset/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('new_asset/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('new_asset/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new_asset/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('new_asset/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('new_asset/assets/css/icons.css') }}" rel="stylesheet">
    <title>Dashtrans - Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">
                    <div
                        class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                            <div class="card-body">
                                <img src="{{ asset('new_asset/assets/images/login-images/register-cover.svg') }}"
                                    class="img-fluid auth-img-cover-login" width="550" alt="" />
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-12 col-xl-5 col-xxl-4 auth-cover-right bg-light align-items-center justify-content-center">
                        <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                            <div class="card-body p-sm-5">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('new_asset/assets/images/logo-icon.png') }}" width="60"
                                            alt="" />
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">Dashtrans Admin</h5>
                                        <p class="mb-0">Please fill the below details to create your account</p>
                                    </div>
                                    <div class="form-body">
                                       <form class="row g-3" method="POST" action="{{ route('register') }}" autocomplete="off" novalidate>
    @csrf

    <!-- Name -->
    <div class="col-12">
        <label for="name" class="form-label">Username</label>
        <input id="name" type="text" name="name" class="form-control"
               placeholder="John" value="{{ old('name') }}" required autofocus autocomplete="name" />
        @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email -->
    <div class="col-12">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" name="email" class="form-control"
               placeholder="example@user.com" value="{{ old('email') }}" required autocomplete="username" />
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <div class="input-group" id="show_hide_password">
            <input type="password" name="password" class="form-control border-end-0"
                   id="password" placeholder="Enter Password" required autocomplete="new-password">
            <a href="javascript:;" class="input-group-text bg-transparent toggle-password">
                <i class='bx bx-hide'></i>
            </a>
        </div>
        @error('password')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="col-12">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
               placeholder="Confirm your password" required autocomplete="new-password">
        @error('password_confirmation')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit -->
    <div class="col-12">
        <div class="d-grid">
            <button type="submit" class="btn btn-light">Sign up</button>
        </div>
    </div>

    <!-- Already registered -->
    <div class="col-12">
        <div class="text-center">
            <p class="mb-0">Already have an account?
                <a href="{{ route('login') }}">Sign in here</a>
            </p>
        </div>
    </div>
</form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <p class="mb-0">Gaussian Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <hr>
            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
    <!--end switcher-->

    <!--plugins-->
    <script src="{{ asset('new_asset/assets/js/jquery.min.js') }}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--plugins-->
    <script src="{{ asset('new_asset/assets/js/jquery.min.js') }}"></script>
    <script>
        $(".switcher-btn").on("click", function() {
                $(".switcher-wrapper").toggleClass("switcher-toggled")
            }), $(".close-switcher").on("click", function() {
                $(".switcher-wrapper").removeClass("switcher-toggled")
            }),


            $('#theme1').click(theme1);
        $('#theme2').click(theme2);
        $('#theme3').click(theme3);
        $('#theme4').click(theme4);
        $('#theme5').click(theme5);
        $('#theme6').click(theme6);
        $('#theme7').click(theme7);
        $('#theme8').click(theme8);
        $('#theme9').click(theme9);
        $('#theme10').click(theme10);
        $('#theme11').click(theme11);
        $('#theme12').click(theme12);
        $('#theme13').click(theme13);
        $('#theme14').click(theme14);
        $('#theme15').click(theme15);

        function theme1() {
            $('body').attr('class', 'bg-theme bg-theme1');
        }

        function theme2() {
            $('body').attr('class', 'bg-theme bg-theme2');
        }

        function theme3() {
            $('body').attr('class', 'bg-theme bg-theme3');
        }

        function theme4() {
            $('body').attr('class', 'bg-theme bg-theme4');
        }

        function theme5() {
            $('body').attr('class', 'bg-theme bg-theme5');
        }

        function theme6() {
            $('body').attr('class', 'bg-theme bg-theme6');
        }

        function theme7() {
            $('body').attr('class', 'bg-theme bg-theme7');
        }

        function theme8() {
            $('body').attr('class', 'bg-theme bg-theme8');
        }

        function theme9() {
            $('body').attr('class', 'bg-theme bg-theme9');
        }

        function theme10() {
            $('body').attr('class', 'bg-theme bg-theme10');
        }

        function theme11() {
            $('body').attr('class', 'bg-theme bg-theme11');
        }

        function theme12() {
            $('body').attr('class', 'bg-theme bg-theme12');
        }

        function theme13() {
            $('body').attr('class', 'bg-theme bg-theme13');
        }

        function theme14() {
            $('body').attr('class', 'bg-theme bg-theme14');
        }

        function theme15() {
            $('body').attr('class', 'bg-theme bg-theme15');
        }
    </script>
</body>


<!-- Mirrored from codervent.com/dashtrans/demo/vertical/auth-cover-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:08:59 GMT -->

</html>
