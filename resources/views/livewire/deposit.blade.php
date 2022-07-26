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
                                                   aria-label="Text input with dropdown button"
                                                   placeholder="Account ID">
                                        </div>
                                    </div>
                                    <hr class="mb-3">
                                    <h6>Deposit info</h6>
                                    <div class="mb-3 row">
                                        <div class="col-md-4">
                                            <select id="currencies" name="currency" class="form-select"
                                                    aria-label="Default select example">
                                                <option selected>Currency</option>
                                                <option value="USD">Dollar</option>
                                                <option value="POUND">Pound</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input id="amount" value="0" name="amount" type="number"
                                                   class="form-control"
                                                   aria-label="Text input with dropdown button"
                                                   placeholder="Amount to deposit">
                                            <p class="mt-0 float-end text-primary" style="font-size:10pt;">Equivalent to
                                                <span id="equal" class="fw-bold"> FCFA</span></p>
                                        </div>
                                    </div>
                                    {{--                                    <button type="submit" class="btn btn-primary w-100">Proceed</button>--}}
                                    <button id="process" type="button" class="btn btn-primary  w-100"
                                            data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                        Proceed
                                    </button>
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pay by Mobile Money</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <select id="currency" name="currency" class="form-select" aria-label="Default select example">
                            <option selected disabled>Pays</option>
                            <option value="XAF">Cameroon</option>
                            <option value="RWF">Rwanda</option>
                        </select>
                    </div>
                    <div class="col">
                        <input id="phone" name="phone" type="number" class="form-control"
                               aria-label="Text input with dropdown button"
                               placeholder="your phone number">
                        <p class="mt-0 float-end text-primary" style="font-size:10pt;">Equivalent to
                            <span id="equivalent" class="fw-bold"> </span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="cancel" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button id="payNow" type="button" class="btn btn-primary">Pay Now <span id="total_amount"></span>
                    <button id="spin" class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>

        let process = $('#process').prop("disabled", true);
        var spin = $('#spin').hide();
        var pay = $('#payNow').prop("disabled", true);

        $('#equivalent').text(0 + ' FCFA')
        $('#equal').text(0 + ' FCFA')

        $('#currencies').change(function () {
            if ($(this).val() === 'USD') {

                $('input[name="amount"]').on('change', function () {
                    process.prop("disabled", false);
                    let rate = 654.23;
                    let result;
                    if ($(this).val() <= 0 || $(this).val == null) {
                        $(this).val(0);
                        process.prop("disabled", true);
                    }

                    if ($(this).val() > 0) {
                        result = $(this).val() * rate;
                        $('#equivalent').text(result + ' FCFA')
                        $('#equal').text(result + ' FCFA')
                    }
                })
            }
        })

        $('#cancel').on('click', function () {
            $('#amount').val(0)
            $('#equivalent').text(0 + ' FCFA')
            $('#equal').text(0 + ' FCFA')
            $('#payNow').prop("disabled", true)
        })

        $('#currency').change(function() {
            $('input[name="phone"]').change(function(){
                pay.prop("disabled", false);
                if ($(this).val() <= 0 || $(this).val == null) {
                    pay.prop("disabled", true);
                }
            })
        })

        pay.on('click', function () {
            let pay = $('#payNow').prop("disabled", true);
            pay.hide();
            spin.show();


            let data = {
                "type": "mobile_money_franco",
                "currency": $('#currency').val(),
                "amount": parseInt($('#equivalent').text()),
                "phone": parseInt($('#phone').val()),
                "order_id": "12112",
                "network": "",
                "user": {
                    "id": "{{ auth()->id() }}",
                    "first_name": "{{ auth()->user()->name }}",
                    "last_name": "{{ auth()->user()->name }}",
                    "email": "{{ auth()->user()->email }}",
                },
                "cardInfo": [{
                    "cardno": "",
                    "cvv": "",
                    "expirymonth": "",
                    "expiryyear": ""
                },
                    {
                        "accountnumber": "",
                        "bvn": " account bank"
                    }]
            }

            let countryCode = $.get('https://ipinfo.io', function () {
            }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "cm";
            });


            $.ajax({
                url: "http://127.0.0.1:8000/api/payment/make",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                data: data,
                success: function (response) {
                    if (response.status === 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message,
                        })
                        pay.prop('disabled', false)
                        pay.show();
                        spin.hide();
                    }
                    if (response.status === 'fail') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message,
                        })
                        pay.prop('disabled', false)
                        pay.show();
                        spin.hide();
                    }
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'info',
                            title: 'Description',
                            text: 'Check your phone to confirme the transaction',
                        })
                        pay.prop('disabled', false)

                        checkPayment(response.track);

                    }
                },
                error: function (response) {
                    console.log(response.status)
                }
            });
        });

        // Variable to hold request
        var request;

        function isEmpty(str) {
            return (!str || str.length === 0);
        }

        function checkPayment(order_id) {
            // Fire off the request to /form.php

            let request;

            request = $.ajax({
                url: "http://127.0.0.1:8000/api/payment/check-status/" + order_id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
            });

            request.done(function (response) {

                if (response.status === 'pending') {

                    setTimeout(function () {
                        checkPayment(order_id);
                    }, 10000);
                }

                if (response.status === 'fail') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Transaction failed or Aborted',
                    })
                }

                if (response.status === 'success') {

                    var $form = $('#deposit');

                    var $inputs = $form.find("input, select, button");

                    var serializedData = $form.serialize();

                    $inputs.prop("disabled", true);

                    if (request) {
                        request.abort();
                    }

                    // Fire off the request to /form.php
                    request = $.ajax({
                        url: "{{ route('makeDeposit') }}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "post",
                        data: serializedData
                    });

                    // Callback handler that will be called on success
                    request.done(function (response, textStatus, jqXHR) {
                        // Log a message to the console

                        console.log(JSON.stringify(response.message))

                        if (response.length !== 0 && response !== '1') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response,
                            })
                            return false;
                        }

                        if (response === 1 || response === '1') {
                            Swal.fire(
                                'Thank you!',
                                'You Account Has been Credited',
                                'success'
                            )
                            return false;
                        }

                    });

                    // Callback handler that will be called on failure
                    request.fail(function (jqXHR, textStatus, errorThrown) {
                        // Log the error to the console

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: errorThrown,
                        })
                        console.error(
                            "The following error occurred: " +
                            textStatus, errorThrown
                        );
                    });

                    // Callback handler that will be called regardless
                    // if the request failed or succeeded
                    request.always(function (response) {
                        // Reenable the inputs

                        console.log(response);
                        $inputs.prop("disabled", false);
                    });

                }
            })

            request.fail(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something is wrong check your network',
                })
            })
        }
    </script>
@endsection
