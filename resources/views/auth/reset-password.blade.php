<x-guest-layout>

    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-12 px-5 d-flex flex-column">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="text-info text-gradient">Reset Password</h3>
                                </div>
                                <div class="card-body pb-3">
                                    <x-errors title="We found {errors} validation error(s)"></x-errors>

                                    <form method="POST" action="{{ route('update.password') }}">
                                        @csrf

                                        <div class="mt-4">
                                            <x-jet-input class="block mt-1 w-full" type="hidden" name="phone" required  value="{{ session('phone') }}"/>
                                        </div>
                                        <div class="mt-4">
                                            <x-jet-label for="password" value="{{ __('Password') }}" />
                                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                        </div>

                                        <div class="mt-4">
                                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <x-jet-button id="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">
                                                {{ __('Reset Password') }}
                                            </x-jet-button>
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
            $('#submit').on('click', function (e) {
                // e.preventDefault();
                setTimeout(function () {
                    $('#submit').prop("disabled", true);
                }, 100);
            })
        </script>

    @endsection

</x-guest-layout>
