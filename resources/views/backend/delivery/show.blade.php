@extends('backend.layouts.delivery_layout')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('delivery.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('delivery.index') }}">Deliveries</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Delivery Details</li>
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
            <p><strong>Order Status:</strong> {{ $order->status }}</p>
        </div>
    </div>

    @if (!$order->status == 'Delivered')
        <a href="{{ route('delivery.send_email_otp', $order->id) }}" class="btn btn-primary">Send OTP</a>


        @if (session('otp_success'))
            <p class="text-success">{{ session('otp_success') }}</p>
        @endif


        <div class="card-header mb-3 mt-2">
            <h4>Customer OTP</h4>
            <form action="{{ route('delivery.confirm_delivery') }}" method="POST" style="display:inline-block;">
                @csrf
                <input type="text" name="otp" />
                <input type="text" value={{ $order->id }} name="id" hidden />

                <button type="submit" class="btn btn-info btn-sm">Confirm Delivery</button>
            </form>
        </div>


        @if (session('otp_match'))
            <p class="text-success">{{ session('otp_match') }}</p>
        @elseif (session('failure'))
            <p class="text-danger">{{ session('failure') }}</p>
        @endif
    @endif
@endsection
