<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="container-fluid py-4">

        <div class="row justify-content-center">

            <!-- deposit  -->
            <div class="col-xl-6 col-md-6 mt-2">
                <!-- Tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Deposit
                        </button>
                    </li>

                </ul>

                <!-- tabs -->
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <!-- deposit form -->
                            <form id="deposit">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Select Broker</label>
                                        <select name="broker" class="form-select" aria-label="Default select example">
                                            <option selected>Select Broker</option>
                                            <option value="1">Derive</option>
                                            <option value="2">Just Forex</option>
                                        </select>
                                        <div class="mt-3">
                                            <label for="" class="form-label">Enter your account ID</label>
                                            <input type="text" class="form-control" name="account_id"
                                                   aria-label="Text input with dropdown button" placeholder="Account ID">
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <h6>Deposit info</h6>
                                    <div class="mb-3 row">
                                        <div class="col-md-4">
                                            <select name="currency" class="form-select" aria-label="Default select example">
                                                <option selected>Currency</option>
                                                <option value="USD">Dollar</option>
                                                <option value="POUND">Pound</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input name="amount" type="text" class="form-control"
                                                   aria-label="Text input with dropdown button"
                                                   placeholder="Amount to deposit">
                                            <p class="mt-0 float-end text-primary" style="font-size:10pt;">Equivalent to
                                                <span class="fw-bold">6200 FCFA</span></p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Proceed</button>
                                </div>
                            </form>
                            <!-- deposit form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- deposit  -->
        </div>
    </div>
</div>
