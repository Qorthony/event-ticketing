<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentGatewayController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function process(Order $order, Request $request)
    {
        // dd(Auth::guard('web')->user()->name);
        //Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        //Array untuk dikirim ke midtrans
        $midtrans = [
            "transaction_details" => [
                "order_id" => $order->id_order,
                "gross_amount" => (int) $order->event->harga,
            ],
            "item_details" => [
                [
                    "id" => $order->event_id,
                    "price" => $order->event->harga,
                    "name" => $order->event->nama_event,
                    "quantity"=> 1,
                    "merchant_name" => $order->event->penyelenggara
                ]
            ],
            "customer_details" => [
                "first_name" => Auth::guard('web')->user()->name,
                "email" => Auth::guard('web')->user()->email
            ],
            "enabled_payments" => [
                "gopay", "permata_va", "bank_transfer"
            ],
            "vtweb" => []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            // Redirect to Snap Payment Page
            // return redirect($paymentUrl);
            return Inertia::location($paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function callback(Request $request)
    {
        # code...
    }
}
