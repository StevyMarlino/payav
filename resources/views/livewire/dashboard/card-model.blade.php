<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="row">
        <div class="col-xl-4 col-md-4 mt-2">
            <div class="card p-3 ">
                <h5 class="text-sm fw-bold text-muted">Pending</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-muted text-sm">{{ $pending }} Transaction{{ ($pending > 1)? 's': '' }}</h3>
                    </div>
                    <div class="col-md-6">
                        <p class="text-end"><span class="badge bg-primary">{{ $pending }} </span></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-md-4 mt-2">
            <div class="card p-3 ">
                <h5 class="text-sm fw-bold text-muted">Completed</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class=" text-muted text-sm">{{ $completed }} Transaction{{ ($completed > 1)? 's': '' }}</h3>
                    </div>
                    <div class="col-md-6">
                        <p class="text-end"><span class="badge bg-primary">{{ $completed }}</span></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-4 col-md-4 mt-2">
            <div class="card p-3 ">
                <h5 class="text-sm fw-bold text-muted">Refferals</h5>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class=" text-muted text-sm">0 users</h3>
                    </div>
                    <div class="col-md-6">
                        <p class="text-end"><span class="badge bg-primary">Bonus 0 F</span></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
