<div>
    {{-- The whole world belongs to you. --}}

    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-sm-8 mt-7 mt-md-5">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-primary text-gradient">Join us today</h3>
                                    <p class="mb-0">Enter your email and password to register</p>
                                </div>
                                <div class="card-body pb-3">
                                    {{--                                    <x-errors title="We found {errors} validation error(s)"></x-errors>--}}
                                    <form wire:submit.prevent="save" role="form">
                                        <label for="name">Name</label>
                                        <div class="mb-3">
                                            <input wire:model.defer="name" type="text"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   placeholder="Name" aria-label="Name">
                                            @error('name') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                        <label for="email">Email</label>
                                        <div class="mb-3">
                                            <input wire:model.defer="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror "
                                                   placeholder="Email" aria-label="Email">
                                            @error('email') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>

                                        <label for="phone"> Phone </label>
                                        <div class="mb-3">
                                            <input wire:model.defer="phone" id="phone"
                                                   class="form-control @error('phone') is-invalid @enderror "
                                                   type="tel" name="phone"
                                            />
                                            <span id="valid-msg" class="hide" style="color:green;">✓ Valid</span>
                                            <span id="error-msg" class="hide" style="color:red;"></span>
                                            @error('phone') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="mb-3">
                                            <input wire:model.defer="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror "
                                                   placeholder="Password"
                                                   aria-label="Password">
                                            @error('password') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                        <label>Confirm Password</label>
                                        <div class="mb-3">
                                            <input wire:model.defer="password_confirmation" type="password"
                                                   class="form-control @error('password') is-invalid @enderror "
                                                   placeholder="Password"
                                                   aria-label="Password">
                                            @error('password') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-check form-check-info text-left">
                                            <input wire:model.defer="terms"
                                                   class="form-check-input @error('terms') is-invalid @enderror "
                                                   type="checkbox" value=""
                                                   id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="#"
                                                               class="text-dark font-weight-bolder">Terms and
                                                    Conditions</a>
                                            </label>
                                            @error('terms') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Sign
                                                up
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                    <p class="mb-4 mx-auto">
                                        Already have an account?
                                        <a href="{{ route('login') }}"
                                           class="text-primary text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div
                                    class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('./assets/img/curved9.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>

@section('css')
    <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.min.css') }}">
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

@endsection

@section('js')

    <script>
        var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        var iti = window.intlTelInput(input, {
            utilsScript: "{{ asset('build/js/utils.js') }}",
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
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });

        // on keyup / change flag: reset
        input.addEventListener('change', reset);
        input.addEventListener('keyup', reset);
    </script>
@endsection
