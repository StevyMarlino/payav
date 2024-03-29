<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/chartist.min.css') }}" rel="stylesheet"/>
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet"/>
    <script src="https://unpkg.com/feather-icons"></script>

    {{--    {--        <!-- Scripts -->--}}
    @livewireStyles
    <wireui:scripts/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @yield('css')
    <style type="text/css">
        .profile-sm {
            height: 32px;
            width: 32px;
        }

        .iti__flag {
            background-image: url("{{ asset('build/img/flags.png') }}");
        }

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("{{ asset('build/img/flags@2x.png') }}");
            }
        }

        .hide {
            display: none;
        }
    </style>
</head>
<body>
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 "
                       href="{{ url('/') }}">
                        Payav
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                  <span class="navbar-toggler-bar bar1"></span>
                                  <span class="navbar-toggler-bar bar2"></span>
                                  <span class="navbar-toggler-bar bar3"></span>
                                </span>
                    </button>
                    <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">

                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <x-notifications></x-notifications>
        </div>

    </div>
</div>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mx-auto text-center">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Company
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    About Us
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Team
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Products
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Blog
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                    Pricing
                </a>
            </div>
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                    <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>

                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>
    // // Import the functions you need from the SDKs you need
    // import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
    // import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
    // // TODO: Add SDKs for Firebase products that you want to use
    // // https://firebase.google.com/docs/web/setup#available-libraries
    //
    // // Your web app's Firebase configuration
    // // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyCE0i8_6hlYvpNt1uAcJg-f60yX8oDOq0I",
        authDomain: "localhost",
        projectId: "payav-409fb",
        storageBucket: "payav-409fb.appspot.com",
        messagingSenderId: "821216723961",
        appId: "1:821216723961:web:bf8f5ae4e865c1b8e77328",
        measurementId: "G-TPVKWHC4RG"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    // const analytics = getAnalytics(app);
</script>

<script type="text/javascript">
    window.onload = function () {
        render();
        if ($("#exist_phone")[0]) {
            $('#submit-code').prop("disabled", true);
            sendOTP();
        }
    };

    function render() {
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
            'size': 'invisible',
            'callback': (response) => {
                // reCAPTCHA solved, allow signInWithPhoneNumber.
                // ...

            },
            'expired-callback': () => {
                // Response expired. Ask user to solve reCAPTCHA again.
                // ...
            }
        });
        recaptchaVerifier.render().then((widgetId) => {
            window.recaptchaWidgetId = widgetId;
        });
    }

    function sendOTP() {
        const phoneNumber = $("#exist_phone").val();
        const appVerifier = window.recaptchaVerifier;
        firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then((confirmationResult) => {
                // SMS sent. Prompt user to type the code from the message, then sign the
                // user in with confirmationResult.confirm(code).
                window.confirmationResult = confirmationResult;
                $('#submit-code').prop("disabled", false);
                $("#success").show();
                console.log('Message send');
                // ...
            }).catch((error) => {
            // Error; SMS not sent
            // ...
        });
    }

    $('#code').submit(function (e) {
        e.preventDefault();
        $('#submit-code').prop("disabled", true);
        verify();
    })

    function verify() {
        const code = $('#codes').val();

        var credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, code);
        firebase.auth().signInWithCredential(credential).then((result) => {
            console.log('number verify')

            location.href = "{{ route('reset.password') }}"
        }).catch((error) => {
            // Error; SMS not sent
            // ...
            $('#submit-code').prop("disabled", false);
            $("#success").hide();
            $("#error").show();

            console.log('Wrong Code Provided ')
            console.log('SMS not sent')
        });

    }
</script>
<!--   Core JS Files   -->
<script src="{{ asset('js/my.js') }}"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/chartist.min.js') }}"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('build/css/intlTelInput.min.css') }}">
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@livewireScripts

<script src="{{ asset('build/js/intlTelInput.js') }}"></script>

@yield('js')
@wireUiScripts
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    var input = document.querySelector("#phone");
    errorMsg = document.querySelector("#error-msg");
    validMsg = document.querySelector("#valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    var iti = window.intlTelInput(input, {
        initialCountry: "auto",
        hiddenInput: "full_phone",
        geoIpLookup: function (callback) {
            $.get('https://ipinfo.io', function () {
            }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "cm";
                callback(countryCode);
            });
        },
        utilsScript: "{{ asset('build/js/utils.js') }}" // just for formatting/placeholders etc
    });

    var reset = function () {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // on blur: validate
    input.addEventListener('blur', function () {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
                $('#submit').prop("disabled", false);
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
                $('#submit').prop("disabled", true);
            }
        }
    });

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
</script>

</body>
</html>
