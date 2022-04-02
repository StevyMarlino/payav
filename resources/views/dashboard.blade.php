<x-app-layout>

<div class="row">
    <div class="col-md-2">
        <livewire:dashboard.side-menu />
    </div>
<div class="col-md-10">
    <main class="main-content  h-100 mt-1 border-radius-lg ">
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h5 class="fw-bolder">Welcome {{ auth()->user()->name }}</h5>

           <livewire:dashboard.card-model />

            <section class="mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card border-0">
                            <div class="card-header border-0 bg-transparent">
                                <div class="card-title ">
                                    <h5>Recent transactions</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">PT-3A528D66</th>
                                            <td>1 $</td>
                                            <td><span class="badge badge-light-info text-primary">exchange</span></td>
                                            <td>08/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-65CB64C4</th>
                                            <td>555 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">exchange</span></td>
                                            <td>08/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-53B5C6F2</th>
                                            <td>555 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">deposit</span></td>
                                            <td>08/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-2689F52C</th>
                                            <td>1 $</td>
                                            <td><span class="badge badge-light-info text-primary">exchange</span></td>
                                            <td>14/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Completed</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-C64A4AF8</th>
                                            <td>555 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">deposit</span></td>
                                            <td>14/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-787AB107</th>
                                            <td>769 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">deposit</span></td>
                                            <td>16/02/2022</td>
                                            <td><span class="badge badge-light-success text-success">Completed</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-EAF81F61</th>
                                            <td>1 $</td>
                                            <td><span class="badge badge-light-info text-primary">exchange</span></td>
                                            <td>10/03/2022</td>
                                            <td><span class="badge badge-light-warning text-warning">Pending</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-632B9E39</th>
                                            <td>555 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">deposit</span></td>
                                            <td>10/03/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-31508985</th>
                                            <td>5555 CFA</td>
                                            <td><span class="badge badge-light-info text-primary">deposit</span></td>
                                            <td>17/03/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>

                                        <tr>
                                            <th scope="row">PT-668EE6A5</th>
                                            <td>1 $</td>
                                            <td><span class="badge badge-light-info text-primary">exchange</span></td>
                                            <td>17/03/2022</td>
                                            <td><span class="badge badge-light-success text-success">Awaiting verification</span></td>

                                        </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div>
</div>

</x-app-layout>
