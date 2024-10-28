<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function showSalesRpt(Request $request, $status = 'Processing')
  {

    $completed_orders = Order::with('orderItems')
      ->whereNotNull('charge');

    if ($status !== 'ALL') {
      $completed_orders = $completed_orders->where('status', $status);
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

    $totalSalesAmount = $completed_orders->sum('total_amount');


    return view('backend.reports.salesRpt', compact('completed_orders', 'status', 'totalSkusSold', 'totalSalesAmount', 'total_profit'));
  }

  public function showPLRpt()
  {
    // 
  }

  public function showStocksRpt()
  {
    // 
  }
}
