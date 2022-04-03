<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#">
                <span class="ms-1 font-weight-bold"></span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <h6 class="text-center">Account ID : {{ auth()->user()->client_id }}</h6>
        <hr class="horizontal dark mt-1">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} "  href="#">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fa fa-home" style="font-size: 16px; color:#bcb7b7;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">

                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fa fa-exchange text-black-50" style="font-size: 16px;"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Exchange</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fa fa-compress text-black-50" style="font-size: 16px;"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Deposit/withdraw</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="#">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <div>
                                <i class="fa fa-money text-black-50" style="font-size: 16px;"></i>
                            </div>
                        </div>
                        <span class="nav-link-text ms-1"> Transactions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  " href="#">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fa fa-user-plus text-black-50" style="font-size: 16px;"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Referral</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#componentsExamples1" class="nav-link  " aria-controls="componentsExamples1" role="button" aria-expanded="true">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fa fa-cog text-black-50" style="font-size: 16px;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Settings</span>
                    </a>
                    <div class="collapse  " id="componentsExamples1">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item ">
                                <a class="nav-link " href="#">
                                    <span class="sidenav-mini-icon"> F </span>
                                    <span class="sidenav-normal"> Payment settings </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Log </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>
