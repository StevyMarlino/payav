@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <h5 class="fw-bolder mb-5">Welcome {{ auth()->user()->name }}</h5>
        <div class="row">

            <!-- deposit -->
            <div class="col-xl-4 col-md-4 mt-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-globe text-lg opacity-10 mt-1" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-bolder">Deposit</h6>
                                <p class="mt-2">Deposit  from your tradding account</p>
                            </div>
                        </div>
                        <a href="{{ route('deposit') }}" class="btn btn-primary float-end">Get started</a>
                    </div>
                </div>
            </div>
            <!-- end deposit  -->

            <!-- withdraw -->
            <div class="col-xl-4 col-md-4 mt-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-bolder">Withdraw</h6>
                                <p class="mt-2">withdraw into your tradding account</p>
                            </div>
                        </div>
                        <a href="{{ route('withdraw') }}" class="btn btn-primary float-end">Get started</a>
                    </div>
                </div>
            </div>
            <!-- end withdraw -->

            <!-- exchange -->
            <div class="col-xl-4 col-md-4 mt-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-exchange-alt text-lg opacity-10 mt-1" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-bolder">Exchange</h6>
                                <p class="mt-2">Exchange Skrill to CFA and Vice-versa</p>
                            </div>
                        </div>
                        <a href="{{ route('exchange') }}" class="btn btn-primary float-end">Get started</a>
                    </div>
                </div>
            </div>
            <!-- end exchange -->

        </div>
    </div>
@endsection
