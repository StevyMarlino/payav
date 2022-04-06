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


    </div>

    <footer class="mt-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <ul class="list-unstyled text-center">
                        <li class="list-inline-item">
                            <a href="#" class="text-sm text-black-50">Company</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-sm text-black-50">About us</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-sm text-black-50">Terms and conditions</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-sm text-black-50">Privacy policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-8">
                    <ul class="list-unstyled text-center">
                        <li class="list-inline-item">
                            <a href="terms.html" class="text-black-50"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="terms.html" class="text-black-50"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="terms.html" class="text-black-50"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-sm text-center text-black-50">Copyright@ 2022 PAYAV SARL</p>
                </div>
            </div>
        </div>
    </footer>
    </main>
@endsection
