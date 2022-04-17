<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container-fluid py-4">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active w-100" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Skrill > Fiat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fiat > Skrill</button>
                    </li>

                </ul>

                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <!-- skrill to momo-->
                                <form class="row" method="POST" action="https://payav.co/exchage-rate" data-origin="$" data-dest="CFA" data-info="">
                                    <input type="hidden" name="_token" value="J3BTKoikfNHQ5cXuJvotm7ZAOD58i0lGeAd9amg7">                                            <div class="col-md-6">
                                        <div class="input-group">
                                            <select class="form-select get_rate" aria-label="Default select example" name="origin_id">
                                                <option value="">Skill</option>
                                                <option value="3">Dollar Skrill</option>
                                                <option value="4">Pound Skrill</option>
                                                <option value="5">Dollar (Binary)</option>
                                                <option value="6">Dollar (Just Forex)</option>
                                            </select>
                                            <input type="text" class="form-control typing" placeholder="I have" data-original="$" aria-label="i have" name="amount_to_pay" aria-describedby="basic-addon1" readonly="">
                                        </div>
                                        <div class="d-none resultinfo"><small class="exchange-rate"></small>
                                            <div><small>Transaction fee = <span class="exchange-fee"></span></small></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <select class="form-select get_rate" aria-label="Default select example" name="destination_id">
                                                <option value="">Franc CFA</option>
                                                <option value="1">MoMo</option>
                                                <option value="2">Orange Money</option>
                                            </select>
                                            <input type="text" class="form-control typing" placeholder="I will recieve" data-destina="cfa" name="amount_to_receive" aria-label="I will recieve" aria-describedby="basic-addon1" readonly="">
                                        </div>
                                    </div>
                                    <div class="d-none text-center minimum">
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Skrill Email" name="pay_via" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" placeholder="Mobile number" name="receive_via" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <p class="text-center mt-3"><a href="#" class="btn btn-primary">Proceed</a></p>
                                </form>
                                <!-- end of skrill to momo -->
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <!-- Momo to skrill-->
                                <form class="row" method="POST" action="https://payav.co/exchage-rate" data-origin="CFA" data-dest="$" data-info="">
                                    <input type="hidden" name="_token" value="J3BTKoikfNHQ5cXuJvotm7ZAOD58i0lGeAd9amg7">                                            <div class="col-md-6">
                                        <div class="input-group">
                                            <select class="form-select get_rate" aria-label="Default select example" name="origin_id">
                                                <option value="">Franc CFA</option>
                                                <option value="1">MoMo</option>
                                                <option value="2">Orange Money</option>
                                            </select>
                                            <input type="text" class="form-control typing" placeholder="I have" name="amount_to_pay" data-original="cfa" aria-label="I have" aria-describedby="basic-addon1" readonly="">
                                        </div>
                                        <div class="d-none resultinfo"><small class="exchange-rate"></small>
                                            <div><small>Transaction fee = <span class="exchange-fee"></span></small></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <select class="form-select get_rate" aria-label="Default select example" name="destination_id">
                                                <option value="">Skill</option>
                                                <option value="3">Dollar Skrill</option>
                                                <option value="4">Pound Skrill</option>
                                                <option value="5">Dollar (Binary)</option>
                                                <option value="6">Dollar (Just Forex)</option>
                                            </select>
                                            <input type="text" class="form-control typing" placeholder="I will recieve" data-destina="$" aria-label="I will recieve" aria-describedby="basic-addon1" name="amount_to_receive" readonly="">
                                        </div>
                                    </div>
                                    <div class="d-none text-center minimum">
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" placeholder="Mobile number" name="pay_via" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Skrill Email" name="receive_via" aria-label="Email" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <p class="text-center mt-3"><a href="#" class="btn btn-primary">Proceed</a></p>
                                </form>
                                <!-- Momo to Skrill -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </div>
</div>
