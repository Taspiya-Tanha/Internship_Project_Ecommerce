<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function showSalesRpt(Request $request, $status = 'Processing')
  {
    $completed_orders = Order::with('orderItems');

    if (in_array($status, ['Delivered', 'Processing', 'Dispatched'])) {
      $completed_orders = $completed_orders->where('status', $status);
    } else if ($status != "ALL") {
      return abort(404);
    }

    $completed_orders = $completed_orders->get();

    $total_profit = $completed_orders->sum(function ($order) {
      return $order->orderItems->sum(function ($orderItem) {
        return ($orderItem->price - $orderItem->product->purchase_price) * $orderItem->product_qty;
      });
    });

    $totalSkusSold = $completed_orders->sum(function ($order) {
      return $order->orderItems->sum('product_qty');
    });

    $totalSalesAmount = $completed_orders->sum(function ($order) {
      return $order->orderItems->sum(function ($orderItem) {
        return ($orderItem->price * $orderItem->product_qty);
      });
    });

    $totalAmountReceivedFromCard = $completed_orders->sum(function ($order) {
      if ($order->payment_option == "stripe") {
        return $order->orderItems->sum(function ($orderItem) {
          return $orderItem->price * $orderItem->product_qty;
        });
      }
      return 0; // Or return a default value if needed
    });

    return view('backend.reports.salesRpt', compact('completed_orders', 'status', 'totalSkusSold', 'totalSalesAmount', 'total_profit', 'totalAmountReceivedFromCard'));
  }

  public function showStocksRpt()
  {
    $products = Product::where('SoftDelete', 1)
      ->orderBy('stock', 'asc')
      ->with('OrderItem')
      ->get();

    return view('backend.reports.stocksRpt', compact('products'));
  }
}
