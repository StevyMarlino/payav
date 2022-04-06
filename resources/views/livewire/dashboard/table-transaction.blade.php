<div>
    {{-- Stop trying to control. --}}

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
                            <table id="myTable" class="table table-borderless table-hover">
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
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <th>{{ $transaction->transaction_id }}</th>
                                        <td>{{ number_format($transaction->amount) }}</td>
                                        <td><span
                                                class="badge badge-light-info text-primary">{{ $transaction->type }}</span>
                                        </td>
                                        <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                        <td><span
                                                class="badge badge-light-success {{ ($transaction->status) ? 'text-success' : 'text-warning' }}">{{ ($transaction->status) ? 'COMPLETED' : 'PENDING' }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@section('js')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
    </script>
@endsection
