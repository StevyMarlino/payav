<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-12 px-5 d-flex flex-column">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left"
                                     x-data="{ display: {{ (session('google_phone_verify'))? 'false' : 'true' }} }">
                                    <h3 x-show="display" class="text-info text-gradient">Please Verify Your Phone
                                        number</h3>
                                    <h3 x-show="!display" class="text-info text-gradient">Enter Code verification
                                        Receive by sms</h3>
                                </div>

                                <div class="card-body pb-3"
                                     x-data="{ showPanel: {{ (session('google_phone_verify'))? 'false' : 'true' }} }">
                                    <div id="success" class="alert alert-teal" style="display: none;">
                                        <span class="alert-close" data-close="alert" title="Close">&times;</span>
                                        <strong>Info</strong> - Check you phone and enter the 6 digits numbers receive.
                                    </div>
                                    <x-errors></x-errors>
                                    <form action="{{ route('phone-check') }}" method="post" x-show="showPanel">
                                        @csrf
                                        <label>Phone number</label>
                                        <div class="mb-3">
                                            <input id="phone" type="tel"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   name="phone" placeholder="Enter Phone number">
                                            <span id="valid-msg" class="hide" style="color:green;">✓ Valid</span>
                                            <span id="error-msg" class="hide" style="color:red;"></span>
                                            @error('phone') <span
                                                class="invalid-feedback">{{ $message }}</span> @enderror
                                            <div id="recaptcha-container"></div>
                                            <input type="hidden" @if(session('phone_google'))id="exist_phone"
                                                   @endif value="@if(session('phone_google')){{ session('phone_google') }} @endif">
                                        </div>
                                        <div class="">
                                            <button id="submit" type="submit" class="btn bg-gradient-primary">Proceed
                                            </button>
                                        </div>
                                    </form>

                                    <form id="code" x-show="!showPanel">
                                        @csrf
                                        <label>Enter code</label>
                                        <div class="mb-3">
                                            <input id="codes" type="text"
                                                   class="form-control"
                                                   maxlength="6"
                                                   name="code" placeholder="Enter 6 Digits numbers ">
                                        </div>
                                        <div class="">
                                            <button id="submit-code" type="submit"
                                                    class="btn bg-gradient-primary">Verify
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
</div>

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
