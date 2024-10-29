@extends('frontend.app.app')
@section('content')
    @php
        $total = App\Models\Cart::where('user_id', Auth::user()->id)->sum('price');
    @endphp
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="section-title section-new-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h4>My Order</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive shopping-table">
                            <table class="table">
                                <thead>
                                    <tr class="table-head">
                                        <th>#</th>
                                        <th>Date & Time</th>
                                        <th>Invoice No.</th>
                                        <th>Total Amount</th>
                                        <th>Billing Address</th>
                                        <th>Status</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $iteration = 1; ?>
                                    @forelse ($orders as $item)
                                        {{-- @foreach ($order->orderItems as $item) --}}
                                        <tr class="table-head">
                                            <td>{{ $iteration++ }} </td>
                                            <td>{{ $item->created_at }} </td>
                                            <td>
                                                <a href="{{ route('profile.myOrderView', $item->id) }}">{{ $item->invoice_no }}
                                                </a>
                                            </td>
                                            {{-- <td>
                                                @if ($item->product)
                                                    <img src="{{ $item->product->image_url }}"
                                                        alt="{{ $item->product->title }}"
                                                        style="width: 75px; height: 60px;">
                                                @else
                                                    <span>Product not found</span>
                                                @endif
                                            </td> --}}
                                            <td>{{ $item->total_amount }}</td>
                                            <td>{{ $item->billing_address }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                @isset($item->charge)
                                                    {{ ucfirst($item->charge->status) }}
                                                @else
                                                    Cash on Delivery
                                                @endisset
                                            </td>
                                            <td><a class="btn btn-sm btn-success"
                                                    href="{{ route('profile.myOrderView', $item->id) }}">View
                                                </a></td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <h4>NO cart item here...</h4>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
