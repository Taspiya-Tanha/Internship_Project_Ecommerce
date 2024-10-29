@extends('backend.layouts.app')

@section('content')
    <h1>Stock Report</h1>

    @if (count($products) > 0)
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Initial Stock</th>
                        <th>Current Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if ($product->image_url)
                                    <img src="{{ $product->image_url }}" alt="{{ $product->title }}" width="50"
                                        height="50">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->intial_stock }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary items-toggle">
                                    View Usage
                                </button>
                            </td>
                        </tr>
                        <tr class="order-items" style="display: none;">
                            <td colspan="6">
                                @if (isset($product->OrderItem) && $product->OrderItem->count() > 0)
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Order Date</th>
                                                <th>Quantity Sold</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->OrderItem as $orderItem)
                                                @if (isset($orderItem->order))
                                                    <tr>
                                                        <td>{{ $orderItem->order->id }}</td>
                                                        <td>{{ $orderItem->order->created_at->format('Y-m-d') }}</td>
                                                        <td>{{ $orderItem->product_qty }}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td colspan="3">No Order Information Available</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No stock usage found.</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No products found in the report.</p>
    @endif
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $(".items-toggle").click(function() {
                $(this).closest("tr").next(".order-items").toggle();
            });
        });
    </script>
@endpush
