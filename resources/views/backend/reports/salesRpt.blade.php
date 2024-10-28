@extends('backend.layouts.app')
<style>
    .context-menu {
        display: none;
        /* Your other styles */
    }

    .context-menu.show {
        display: block;
    }
</style>
@section('content')
    <div>

        <h2>Sales Report</h2>
        <div class="tabs-section">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ $status == 'Processing' ? 'active' : '' }}"
                        href="{{ route('report.sales', 'Processing') }}" data-toggle="tab">Processing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $status == 'Dispatched' ? 'active' : '' }}"
                        href="{{ route('report.sales', 'Dispatched') }}" data-toggle="tab">Dispatched</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $status == 'Delivered' ? 'active' : '' }}"
                        href="{{ route('report.sales', 'Delivered') }}" data-toggle="tab">Delivered</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $status == 'ALL' ? 'active' : '' }}"
                        href="{{ route('report.sales', 'ALL') }}" data-toggle="tab">ALL</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="table-responsive shopping-table order-tables">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Order Date</th>
                                <th>Total Amount</th>
                                <th>Payment Method</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($completed_orders as $order)
                                <tr class="order-header cursor-pointer">
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->fname }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>${{ $order->total_amount }}</td>
                                    <td>{{ $order->payment_option }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td class="text-3xl text-center relative">
                                        <i class="action-button fa-solid fa-circle-chevron-down cursor-pointer"></i>
                                        <div class="context-menu absolute hidden bg-gray-300 rounded-md shadow-lg">
                                            <ul class="!list-none">
                                                <li class="items-toggle py-2 px-4 text-gray-900 hover:bg-gray-100">Show
                                                    Items</li>
                                                <li data-order-id="{{ $order->id }}"
                                                    class="open-order-link py-2 px-4 text-gray-900 hover:bg-gray-100">Open
                                                    Order</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="order-items" style="display: none;">
                                    <td colspan="6">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Product Purchase Price</th>
                                                    <th>Product Price</th>
                                                    <th>Product Quantity</th>
                                                    <th>Total
                                                        Product Price</th>
                                                    <th>Profit/Item</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->orderItems as $orderItem)
                                                    <tr>
                                                        <td>{{ $orderItem->product->title }}</td>
                                                        <td>${{ $orderItem->product->purchase_price }}</td>
                                                        <td>${{ $orderItem->price }}</td>
                                                        <td>{{ $orderItem->product_qty }}</td>
                                                        <td>${{ $orderItem->price * $orderItem->product_qty }}</td>
                                                        <td>${{ $orderItem->price - $orderItem->product->purchase_price }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalSkusSold }}</h3>
                <p>Total SKUs {{ $status }}</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
        </div>

        <div class="small-box bg-success">
            <div class="inner">

                <h3>${{ $totalSalesAmount }}</h3>
                <p>Total value of {{ $status }} Items</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>

        </div>
        <div class="small-box bg-info">
            <div class="inner">

                <h3>${{ $total_profit }}</h3>
                <p>Total Profit from {{ $status }} items</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>

        </div>

    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {

            // Toggle open/close items table
            $(".items-toggle").click(function() {
                $(this).closest("tr").next(".order-items").toggle();

                // Toggle the text of the button
                const buttonText = $(this).text().trim();
                $(this).text(buttonText === "Show Items" ? "Hide Items" : "Show Items");
            });

            // Toggle show action context menu
            $(".action-button").click(function(event) {
                event.stopPropagation();
                $(this).next(".context-menu").toggleClass("show");
                $(this).toggleClass("fa-circle-chevron-down fa-circle-chevron-up");
            });
            // Toggle hide action context menu clicking outside
            $(document).click(function(event) {
                if (!$(event.target).closest('.context-menu').length) {
                    $(".context-menu").removeClass("show");
                    $(".action-button").removeClass("fa-circle-chevron-up").addClass(
                        "fa-circle-chevron-down");
                }
            });

            // clicking link order/{order}
            $(".open-order-link").click(function(event) {
                event.preventDefault();
                var orderId = $(this).data("orderId");
                window.location.href = "/orders/" + orderId;
            });
        });
    </script>
@endpush
