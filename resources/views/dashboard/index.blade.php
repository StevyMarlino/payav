@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid py-4">
        <h5 class="fw-bolder mb-5">Welcome {{ auth()->user()->name }}</h5>
        <div class="row">

            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-globe text-lg opacity-10 mt-1" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-bolder">Deposit and withdraw</h6>
                                <p class="mt-2">Deposit and/or withdraw from your tradding account</p>
                            </div>
                        </div>
                        <a href="{{ route('depositOrWithdraw') }}" class="btn btn-primary float-end">Get started</a>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->

            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
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
                        <a href="{{ route('depositOrWithdraw') }}" class="btn btn-primary float-end">Get started</a>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->

        </div>
    </div>
@endsection
