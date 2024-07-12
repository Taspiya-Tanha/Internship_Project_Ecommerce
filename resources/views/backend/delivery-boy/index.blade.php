@extends('backend.layouts.app')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <!-- Date Range Filter-->
    <div class="row mb-4">
        <div class="col-lg-4">
            <input type="text" id="daterange" class="form-control" placeholder="Select Date Range" />
        </div>
        <div class="col-lg-4">
            <button class="btn btn-primary" id="filter-btn">Filter</button>
            <a href="{{ route('orders.index') }}" class="btn btn-primary" id="filter-btn">Reset</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Total Amount</th>
                                    <th>Billing Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($deliveryBoys as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->fname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->total_amount }}</td>
                                        <td>{{ $item->billing_address }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('orders.show', $item->id) }}">View</a>
                                            <button class="btn btn-sm btn-danger button">Delete</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Category</td>
                                    </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Total Amount</th>
                                    <th>Billing Address</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(function() {
                $('#daterange').daterangepicker({
                    autoUpdateInput: false,
                    locale: {
                        format: 'YYYY-MM-DD',
                        cancelLabel: 'Clear'
                    }
                });

                $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format(
                        'YYYY-MM-DD'));
                });

                $('#daterange').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                });

                $('#filter-btn').on('click', function() {
                    var dateRange = $('#daterange').val();
                    if (dateRange != "") {
                        window.location.href = "{{ route('orders.index') }}?daterange=" + dateRange;
                    } else {
                        // Show error message
                    }
                });
            });
        </script>
    @endpush
@endsection
