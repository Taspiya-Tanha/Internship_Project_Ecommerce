<?php

namespace App\Http\Controllers;

use App\Mail\OTPDelivery;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Nanopkg\BulkSmsBd\Facades\BulkSmsBd;

class DeliveryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index()
  {
    $id = Auth::id();
    $deliverables = Order::where('delivered_by', $id)->get();
    return view('backend.delivery.index', compact('deliverables'));
  }

  /**
   * Delivery dashboard
   * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
   */
  public function deliveryDashboard()
  {
    $id = Auth::id();
    $deliverables = Order::where('delivered_by', $id)->get();
    return view('backend.delivery.index', compact('deliverables'));
  }

  /**
   * Confirm Delivery by sending OTP
   */
  public function confirm_delivery(Request $request)
  {
    $order = Order::findOrFail($request->id);

    // Retrieve the OTP from the request
    $otp = $request->input('otp');

    // Validate the OTP
    if ($otp !== $order->otp || now()->greaterThan($order->otp_expiration)) {
      return redirect()->back()->withErrors(['failure' => 'Invalid OTP or OTP expired']);
    }

    // Update the order status
    $order->status = 'Delivered';
    $order->save();

    return redirect()->back()->with('otp_match', 'Delivery confirmed');
  }


  private function generateUniqueOTP()
  {
    $otp = '';
    $prev_digit = -1;
    $consecutive_count = 0;

    while (strlen($otp) < 6) {
      $digit = rand(0, 9);
      if ($digit == $prev_digit) {
        $consecutive_count++;
        if ($consecutive_count > 1) {
          continue; // Skip if more than two consecutive digits
        }
      } else {
        $consecutive_count = 0;
      }
      $otp .= $digit;
      $prev_digit = $digit;
    }

    return $otp;
  }

  /**
   * Send OTP
   * 
   */

  public function send_email_otp($id)
  {
    $order = Order::findOrFail($id);

    // Generate OTP
    $otp = $this->generateUniqueOTP();

    // Store OTP in the database
    $order->otp = $otp;
    $order->otp_expiration = now()->addMinutes(5)->toDateTime();
    $order->save();

    // Send OTP email
    Mail::to($order->email)->send(new OTPDelivery($order->otp));

    return redirect()->back()->with('otp_success', 'OTP sent to customer\'s email');
  }


  public function send_sms_otp($id)
  {
    $order = Order::findOrFail($id);

    // Generate
    $otp = $this->generateUniqueOTP();

    // Store OTP in the database
    $order->otp = $otp;
    $order->otp_expiration = now()->addMinutes(5)->toDateTime();
    $order->save();

    // Send OTP SMS
    try {
      $response = BulkSmsBd::oneToOne($order->phone, 'Your Nookx OTP is: ' . $otp)->send();

      if ($response) {
        return redirect()->back()->with('otp_success', 'OTP sent to customer\'s phone');
      }
    } catch (\Exception $e) {
      return redirect()->back()->withErrors(['failure' => 'Something went wrong. ' . $e->getMessage()]);
    }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // 
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $order = Order::find($id);
    return view('backend.delivery.show', compact('order'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
