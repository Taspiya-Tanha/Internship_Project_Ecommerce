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
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Product Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $iteration = 1; ?>
                                    @forelse ($orders as $order)
                                        @foreach ($order->orderItems as $item)
                                            <tr class="table-head">
                                                <td>{{ $iteration++ }} </td>
                                                <td>
                                                    @if ($item->product)
                                                        <img src="{{ $item->product->image_url }}"
                                                            alt="{{ $item->product->title }}"
                                                            style="width: 75px; height: 60px;">
                                                    @else
                                                        <span>Product not found</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->product->title }}</td>
                                                <td>{{ $item->product_qty }}</td>
                                                <td>${{ $item->price }}</td>
                                            </tr>
                                        @endforeach
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
