<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Midtrans\Config;
use Midtrans\Notification;
use Midtrans\Snap;
use Midtrans\Transaction;

class PaymentGatewayController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function process(Order $order, Request $request)
    {
        // dd(Auth::guard('web')->user()->name);
        //Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $order->kode_midtrans = Auth::guard('web')->user()->id."-".$order->id_order."-".mt_rand(0, 999);
        $order->save();

        //Array untuk dikirim ke midtrans
        $midtrans = [
            "transaction_details" => [
                "order_id" => $order->kode_midtrans,
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
        //Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        //Instance midtrans notification
        $notification = new Notification();

        //Assign response ke variabel
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $midtrans_order_id = $notification->order_id;
        $order_id = explode("-",$midtrans_order_id);

        //Cari transaksi berdasarkan id
        $order = Order::findOrFail($order_id[1]);

        //Handle Notification status
        if ($status=='capture') {
            if ($type=='credit_card') {
                if ($fraud=='challenge') {
                    $order->status_order = 'MV';
                }
                else {
                    $order->status_order = 'ACC';
                }
            }
        }

        elseif ($status=='settlement') {
            $order->status_order = 'ACC';
        }

        elseif ($status=='pending') {
            $order->status_order = 'MP';
        }
        elseif ($status=='deny') {
            $order->status_order = 'PR';
        }
        elseif ($status=='expire') {
            $order->status_order = 'PB';
        }
        elseif ($status=='cancel') {
            $order->status_order = 'PB';
        }

        $order->save();

    }

    public function finish(Request $request)
    {
        $id = explode("-",$request->order_id);
        $order = Order::findOrFail($id[1]);
        $status = $request->transaction_status;

        if ($status=='capture') {
            $order->status_order = 'ACC';
        }

        elseif ($status=='settlement') {
            $order->status_order = 'ACC';
        }

        elseif ($status=='pending') {
            $order->status_order = 'MP';
        }
        elseif ($status=='deny') {
            $order->status_order = 'PR';
        }
        elseif ($status=='expire') {
            $order->status_order = 'PB';
        }
        elseif ($status=='cancel') {
            $order->status_order = 'PB';
        }

        $order->save();

        return Inertia::render('Event/FinishPayment', ['order'=>$order]);

    }

    public function cekStatus(Request $request)
    {
        //Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $status = Transaction::status($request->order_id);
        return ['status'=>$status];
    }
}
