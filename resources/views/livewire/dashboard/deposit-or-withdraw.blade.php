<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="container-fluid py-4">

        <div class="row justify-content-center">

            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
                <!-- Tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Deposit
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Withdraw
                        </button>
                    </li>

                </ul>

                <!-- tabs -->
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- deposit form -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">

                                <div class="mb-3">
                                    <label for="" class="form-label">Select Broker</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Broker</option>
                                        <option value="1">Derive</option>
                                        <option value="2">Just Forex</option>
                                    </select>
                                    <div class="mt-3">
                                        <label for="" class="form-label">Enter your account ID</label>
                                        <input type="text" class="form-control"
                                               aria-label="Text input with dropdown button" placeholder="Account ID">
                                    </div>
                                </div>
                                <hr class="mb-3">
                                <h6>Deposit info</h6>
                                <div class="mb-3 row">
                                    <div class="col-md-4">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Currency</option>
                                            <option value="1">Dollar</option>
                                            <option value="2">Pound</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control"
                                               aria-label="Text input with dropdown button"
                                               placeholder="Amount to deposit">
                                        <p class="mt-0 float-end text-primary" style="font-size:10pt;">Equivalent to
                                            <span class="fw-bold">6200 FCFA</span></p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary w-100">Proceed</a>
                            </div>
                            <!-- deposit form -->

                            <!-- withdraw form -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">...
                            </div>
                            <!-- withdraw form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->
        </div>
    </div>
</div>
