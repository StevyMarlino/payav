<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

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

                                    <form wire:submit.prevent="{{ $display ? '' : 'check' }}" role="form">
                                        @csrf
                                        <label>Phone number</label>
                                        <div class="mb-3">
                                            <input id="phone" type="phone" class="form-control"
                                                name="phone"   placeholder="Enter Phone number" aria-label="Email">
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn bg-gradient-primary">Proceed</button>
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

