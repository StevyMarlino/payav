<div>
    {{-- Success is as dangerous as failure. --}}

    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-start">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    @if (session()->has('status'))
                                        <div class="alert alert-green">
                                            <span class="alert-close" data-close="alert" title="Close">&times;</span>
                                            <strong>Success</strong> - {{ session('status') }}
                                        </div>
                                    @endif
                                    <x-errors title="We found {errors} validation error(s)"></x-errors>
                                    <form method="POST" action="{{ route('login') }}" class="text-start">
                                        @csrf
                                        <a id="social" href="{{ route('sign-google') }}" class="btn btn-info w-100 mb-3"><span><i class="fab fa-google"></i></span> &nbsp &nbsp Login with Google</a>
                                        <hr class="dropdown-divider">
                                        <p class="mb-0 text-sm text-center mb-3">Or enter your email and password to login</p>


                                        <label for="email">{{ __('Email') }}</label>
                                        <div class="mb-3">
                                            <input wire:model.defer="email" aria-label="Email" placeholder="Email"
                                                   class="form-control" type="email" name="email" autofocus/>
                                        </div>

                                        <label for="password">{{ __('Password') }}</label>
                                        <div>
                                            <input wire:model.defer="password" aria-label="Password"
                                                   placeholder="Password" class="form-control" type="password"
                                                   name="password" autocomplete="current-password"/>
                                        </div>

                                        <div class="mt-3 form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"
                                                   name="remember" checked/>
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="text-center">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                   href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif


                                            <button id="login" type="submit"
                                                    class="btn bg-gradient-primary w-100 mt-4 mb-0">
                                                {{ __('Sign in') }}
                                            </button>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="{{ route('register') }}"
                                           class="text-info text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div
                                    class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset(("assets/img/curved9.jpg")) }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@section('js')
    <script>
        $('#login').on('click', function () {
            setTimeout(function () {
                $('#login').prop("disabled", true);
            }, 100);
        })

        $('#social').on('click', function () {
            setTimeout(function () {
                $('#social').prop("disabled", true);
            }, 100);
        })
    </script>
@endsection
