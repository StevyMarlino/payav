<div>
    {{-- Be like water. --}}
    <div class="container-fluid py-4">
        <h5 class="fw-bolder mb-5">Transactions</h5>
        <div class="row">

            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Deposits</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ number_format($amountDeposit) }} FCFA
                                        <span
                                            class="text-success text-sm font-weight-bolder">{{ $deposit }} operation{{ $deposit > 1 ? 's' : '' }}</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-money-bill mt-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->
            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Withdrawals</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ number_format($amountWithdraw) }} FCFA
                                        <span
                                            class="text-success text-sm font-weight-bolder">{{ $withDraw }} operation{{ $withDraw > 1 ? 's' : '' }}</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-coins mt-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->

            <!-- deposit and withdraw -->
            <div class="col-xl-6 col-md-6 mt-2">
                <div class="card  mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Exchanges</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ number_format($amountExchange) }} FCFA
                                        <span
                                            class="text-success text-sm font-weight-bolder">{{ $exchange }} operation{{ $exchange > 1 ? 's' : '' }}</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fa fa-exchange-alt mt-1 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- deposit and withdraw -->

        </div>


        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link w-100 active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Deposit and withrdaw
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Exchange
                </button>
            </li>
        </ul>
        <div class="tab-content mb-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <!-- Transaction table -->
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="myTable2" class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Operation type
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Broker
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Acc ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Amount
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Transaction ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Wallet
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($myWithdrawOrDepositTransaction as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->type }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm align-middle text-secondary mb-0">{{ $item->broker }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm align-middle text-secondary mb-0">{{ $item->account_id }}</p>
                                        </td>
                                        <td>
                      <span class="badge badge-dot me-4">
                        <i class="bg-info"></i>
                        <span class="text-dark text-xs">{{ $item->amount }}</span>
                      </span>
                                        </td>
                                        <td class="align-left text-start text-sm">
                                            <p class="text-secondary mb-0 text-sm">{{ $item->transaction_id }}</p>
                                        </td>
                                        <td class="align-middle text-start">
                                            <span class="text-secondary text-sm">{{ $item->wallet }}</span>
                                        </td>
                                        <td class="align-middle text-start">
                                            <span
                                                class="text-secondary text-sm">{{ $item->created_at->format('d/m/Y') }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm  {{ $item->status ? 'text-success' : 'text-warning' }}">{{ $item->status ? 'Completed' : 'Pending' }}</span>
                                        </td>
                                    </tr>
                                @endforeach()
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Transaction table Exchange-->
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <!-- Transaction table -->
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table id="myTable" class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Operation type
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Exchange amt
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Broker
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Amt to recieve
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Transaction ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        wallet
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($myExchangeTransaction as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->type }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm align-middle text-secondary mb-0">{{ $item->brocker }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm align-middle text-secondary mb-0">{{ $item->account_id }}</p>
                                        </td>
                                        <td>
                                          <span class="badge badge-dot me-4">
                                            <i class="bg-info"></i>
                                            <span class="text-dark text-xs">{{ number_format($item->amount) }}</span>
                                          </span>
                                        </td>
                                        <td class="align-left text-start text-sm">
                                            <p class="text-secondary mb-0 text-sm">{{ $item->transaction_id }}</p>
                                        </td>
                                        <td class="align-middle text-start">
                                            <span class="text-secondary text-sm">{{ $item->wallet }}</span>
                                        </td>
                                        <td class="align-middle text-start">
                                            <span
                                                class="text-secondary text-sm">{{ $item->created_at->format('d/m/Y')}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-sm  {{ $item->status ? 'text-success' : 'text-warning' }}">{{ $item->status ? 'Completed' : 'Pending' }}</span>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Transaction table Exchange -->
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>


    </div>

</div>
