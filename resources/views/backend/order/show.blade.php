@extends('backend.layouts.app')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Order</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="card mb-3">
        <div class="card-header">
            <h2>Order #{{ $order->id }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Customer Name:</strong> {{ $order->fname }}</p>
            <p><strong>Customer Email:</strong> {{ $order->email }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
        </div>
    </div>

    <h2>Order Items</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $item->product->image_url }}" alt="{{ $item->product->image }}"
                            style="width: 75px; height: 60px;"></td>
                    <td>{{ $item->product->title }}</td>
                    <td>{{ $item->product_qty }}</td>
                    <td>{{ number_format($item->price, 2) }}</td>
                    <td>{{ number_format($item->price * $item->product_qty, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="">
        <h3>Total:
            {{ number_format($order->orderItems->sum(function ($item) {return $item->price * $item->product_qty;}),2) }}
        </h3>
    </div>

    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
@endsection
