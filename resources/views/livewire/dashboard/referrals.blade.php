<div>
    {{-- Do your work, then step back. --}}

    <div class="container-fluid py-4">
        <h5 class="fw-bolder mb-5">Transactions</h5>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-2">Referral Program</h5>
                        <p class="mb-0">Track and find all the details about our referral program, your stats and revenues.</p>
                    </div>
                    <div class="card-body p-3">

                        <div class="row mt-5">
                            <div class="col-lg-5 col-12">
                                <h6 class="mb-0">Referral Code</h6>
                                <p class="text-sm">Use this link below to invite someone to join payav</p>
                                <div class="border-dashed border-1 border-secondary border-radius-md p-3">

                                    <p class="text-xs mb-3"><span class="font-weight-bolder">(Used one time)</span></p>
                                    <div class="d-flex align-items-center">
                                        <div class="form-group w-70">
                                            <div class="input-group bg-gray-200">
                                                <input class="form-control form-control-sm" value="https://payav.co/softui" type="text" disabled="" onfocus="focused(this)" onfocusout="defocused(this)">
                                                <span class="input-group-text bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Referral code expires in 24 hours" aria-label="Referral code expires in 24 hours"><i class="ni ni-key-25"></i></span>
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="btn btn-sm btn-outline-secondary ms-2 px-3">Copy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 mt-4 mt-lg-0">
                                <h6 class="mb-0">How to use</h6>
                                <p class="text-sm">Integrate your referral code in 3 easy steps.</p>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div class="icon icon-shape bg-primary shadow text-center border-radius-md mb-2">
                                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                                <p class="text-sm font-weight-bold mb-2">1. copy the download link </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div class="icon icon-shape bg-primary shadow text-center border-radius-md mb-2">
                                                    <i class="ni ni-send text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                                <p class="text-sm font-weight-bold mb-2">2. Share with a friend to user when signing up</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="card card-plain text-center">
                                            <div class="card-body">
                                                <div class="icon icon-shape bg-primary shadow text-center border-radius-md mb-2">
                                                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                                <p class="text-sm font-weight-bold mb-2">3. Gain up to </p>
                                                <h5 class="font-weight-bolder">2%</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6>Referred Users</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Target progress</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="{{ asset('assets/img/user.jpg') }}" class="avatar me-3" alt="avatar image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Alice Vinget</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm text-success font-weight-bold mb-0">Pending</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <a href="#" class="btn btn-sm btn-primary">Withdraw</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="{{ asset('assets/img/user.jpg') }}" class="avatar me-3" alt="avatar image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Alice Vinget</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">Ongoing</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <a href="#" class="btn btn-sm btn-secondary">Withdraw</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                        <nav aria-label="Page navigation example" class="p-2 pt-3">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>






    </div>

</div>
