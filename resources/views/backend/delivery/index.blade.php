@extends('backend.layouts.delivery_layout')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('delivery.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Deliveries</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Street Address</th>
                                    <th>Total Due</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($deliverables as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->fname }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->country }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->billing_address }}</td>
                                        <td>${{ $order->total_amount }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('delivery.show', $order->id) }}">View</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Delivery For Now</td>
                                    </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Total Due</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
