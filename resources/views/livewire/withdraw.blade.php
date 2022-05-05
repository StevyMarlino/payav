<div>
    {{-- The whole world belongs to you. --}}

    <div class="row justify-content-center mt-5">
        <!-- deposit and withdraw -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3"><span class="badge bg-primary"><i class="fas fa-hand-holding-usd"></i></span> Withdrawal</h5>
                    <!-- test form -->
                    <form id="regForm" action="">
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <label for="" class="form-label mt-3">Select Broker</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Select broker</option>
                                    <option value="1">Just Forex</option>
                                    <option value="2">Deriv</option>
                                </select>
                            </div>

                            <label for="" class="form-label">Trading email</label>
                            <div class="input-group mb-3 w-100">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <small id="emailHelpId" class="form-text text-muted" style="font-size:10pt;">Please make sure its the email used on your broker's platform</small>
                        </div>

                        <div class="tab">
                            <label for="" class="form-label mt-3">Select Currency</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Dollar</option>
                                    <option value="1">Euro</option>
                                    <option value="2">BTC</option>
                                </select>
                            </div>

                            <label for="" class="form-label">Enter amount</label>
                            <div class="input-group mb-3 w-100">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-money-check"></i></span>
                                <input type="number" class="form-control" placeholder="Enter amount">
                            </div>

                            <label for="" class="form-label">Enter the code sent to your email</label>
                            <div class="input-group mb-3 w-100">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Code">
                            </div>
                            <small id="emailHelpId" class="form-text text-muted" style="font-size:10pt;">The code was sent to the email <span class="fw-bolder">a****@gmail.com</span></small>

                        </div>

                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>

                        <div style="overflow:auto;">
                            <p class="text-center">
                                <button class="btn btn-primary ms-2" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </p>
                        </div>



                    </form>
                    <!-- end of test form -->
                </div>
            </div>
        </div>
        <!-- deposit and withdraw -->

    </div>

</div>
