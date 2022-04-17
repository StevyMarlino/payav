<x-guest-layout>
    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain">
                                <div class="card-body px-lg-5 py-lg-5 text-center" x-data="{recovery: false}">
                                    <div class="text-center text-muted mb-4" x-show="! recovery">
                                        <h2>2-Step Verification</h2>
                                        <p>{{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}</p>
                                    </div>
                                    <div class="text-center text-muted mb-4" x-show="recovery">
                                        <p>{{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}</p>
                                    </div>

                                    <x-jet-validation-errors class="mb-4"/>
                                    <form method="POST" action="{{ route('two-factor.login') }}">
                                        @csrf

                                        <div x-data="{ code: ''}" x-init="{ code : $refs.code1.value }" x-show="! recovery" class="row gx-2 gx-sm-3">
                                            <input type="hidden" class="form-control form-control-lg" name="code"
                                                   x-model="code" x-ref="code"
                                                   value="$refs.code1.value+$refs.code2.value+$refs.code3.value+$refs.code4.value+$refs.code5.value+$refs.code6.value"
                                                   maxlength="6" autocomplete="off" autocapitalize="off"/>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code1" value="1" type="text" x-on:keyup="code1 = $refs.code1.value" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code2" type="text" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code3" type="text" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code4" type="text" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code5" type="text" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <input x-ref="code6" type="text" class="form-control text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" autocapitalize="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-4" x-show="recovery">
                                            <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}"/>
                                            <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text"
                                                         name="recovery_code" x-ref="recovery_code"
                                                         autocomplete="one-time-code"/>
                                        </div>


                                        <div class="text-center">
                                            <x-jet-button class="btn bg-gradient-primary w-100 py-xxl-3">
                                                {{ __('Log in') }}
                                            </x-jet-button>

                                            <button type="button"
                                                    class="text-muted text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    x-show="! recovery"
                                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                                                {{ __('Use a recovery code') }}
                                            </button>

                                            <button type="button"
                                                    class="text-muted text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                                    x-show="recovery"
                                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                                                {{ __('Use an authentication code') }}
                                            </button>
                                        </div>

                                    </form>
                                    <span x-text="code">
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
</x-guest-layout>
