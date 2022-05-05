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
                                    <form id="authenticate-two-factor" method="POST"
                                          action="{{ route('two-factor.login') }}">
                                        @csrf

                                        <div x-show="! recovery" class="row gx-2 gx-sm-3">
                                            <input id="code" class="block mt-1 w-full" type="hidden"
                                                   inputmode="numeric" name="code" autofocus x-ref="code"
                                                   autocomplete="one-time-code" />

                                            <div class="col">
                                                <div class="form-group">
                                                    <input id="code1" type="tel" size="1"  autofocus size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >

                                                    <input id="code2" type="tel" size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >

                                                    <input id="code3" type="tel" size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >

                                                    <input id="code4" type="tel" size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >

                                                    <input id="code5" type="tel" size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" my_code text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >

                                                    <input id="code6" type="tel" size="1" inputmode="numeric"
                                                           pattern="[0-9]*"
                                                           class=" my_code text-center form-control-lg"
                                                           maxlength="1" autocomplete="off" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-4" x-show="recovery">
                                            <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}"/>
                                            <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text"
                                                         name="recovery_code" x-ref="recovery_code"
                                                         autocomplete="one-time-code"/>
                                        </div>


                                        <div class="ml-12 mr-4 pr-9 text-center">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div
                                    class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('assets/img/curved9.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @section('js')
        <script>

            $("input").keyup(function () {
                if (this.value.length === this.maxLength)
                    $(this).next('input').focus();
            });

                let names = '';

                $('#code1').on('change',function() {
                    names += $(this).val();
                })
                $('#code2').on('change',function() {
                    names += $(this).val();
                })
                $('#code3').on('change',function() {
                    names += $(this).val();
                })
                $('#code4').on('change',function() {
                    names += $(this).val();
                })
                $('#code5').on('change',function() {
                    names += $(this).val();
                })
                $('#code6').on('change',function() {
                    names += $(this).val();

                    let code = $('#code').val(names);

                    console.log(code)
                })




        </script>
    @endsection
</x-guest-layout>
