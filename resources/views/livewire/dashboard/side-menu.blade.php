<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="sidenav-header">

        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="payavlogo">
            <span class="ms-1 font-weight-bold"></span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link  {{ request()->routeIs('dashboard') || request()->routeIs('depositOrWithdraw') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="fa fa-home text-black-50" style="font-size: 16px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Operation</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('transactions') ? 'active' : '' }}  " href="{{ route('transactions') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <div>
                            <i class="fa fa-money text-black-50" style="font-size: 16px;"></i>
                        </div>
                    </div>
                    <span class="nav-link-text ms-1"> Transactions</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('referrals') ? 'active' : '' }}  " href="{{ route('referrals') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="fa fa-user-plus text-black-50" style="font-size: 16px;"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Referral</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="promotions.html">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="fa fa-user-plus text-black-50" style="font-size: 16px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Promotions</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#componentsExamples1" class="nav-link  "
                   aria-controls="componentsExamples1" role="button" aria-expanded="true">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
                        <i class="fa fa-cog text-black-50" style="font-size: 16px;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
                <div class="collapse  " id="componentsExamples1" style="">
                    <ul class="nav ms-4 ps-3">
                        <li class="nav-item ">
                            <a class="nav-link " href="paymentsettings.html">
                                <span class="sidenav-mini-icon"> F </span>
                                <span class="sidenav-normal"> Payment settings </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="log.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal"> Log </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
