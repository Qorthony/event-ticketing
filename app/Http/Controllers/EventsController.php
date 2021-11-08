<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show()
    {
        return Inertia::render('Event/Show', [
            'events'=>Event::latest()->get()
        ]);
    }

    public function detail(Event $event)
    {
        return Inertia::render('Event/Detail',[
            'event'=>$event,
            'ordered' => $this->existOrder($event->id_event, Auth::guard('web')->id())
        ]);
    }

    public function order(Event $event, Request $request)
    {
        // Jika udah pernah melakukan pemesanan maka tolak
        if ($this->existOrder($event->id_event, Auth::guard('web')->id())) {
            return back();
        }


        $order = new Order();
        $order->tgl_order = now();
        $order->status_order = 'MP';
        $order->user_id = Auth::guard('web')->id();
        $order->event_id = $event->id_event;
        $order->save();

        return redirect('event/payment/'.$order->id_order);
    }

    private function existOrder($id_event, $id_user)
    {
        return Order::where('event_id', $id_event)
                    ->where('user_id', $id_user)
                    ->exists();
    }

    public function showPayment(Order $order)
    {
        $order = Order::join('events','orders.event_id','=','events.id_event')
                        ->where('id_order',$order->id_order)
                        ->first();
        // $order = Order::find($order->id_order);

        // dd($order);
        return Inertia::render('Event/Payment', [
            'order'=>$order
        ]);
    }

    public function uploadPayment(Request $request, Order $order)
    {
        $validated = $request->validate([
            'nama_pengirim'=>'required',
            'no_rek'=>'required|numeric',
            'bank_pengirim'=>'required',
            'bukti_payment'=>'required|file'
        ]);

        // dd($validated, $request->bukti_payment);



        $path = $request->file('bukti_payment')->store('payments','public');
        // $path = Storage::putFile('payments', $request->bukti_payment, 'public');


        $validated['bukti_payment'] = $path;
        $validated['tgl_payment'] = now();
        // dd($validated);

        $payment = Payment::create($validated);
        $order = Order::where('id_order', $order->id_order)
                        ->update([
                            'payment_id'=>$payment->id_payment,
                            'status_order'=>"MV"
                        ]);

        return redirect('/event/orderHistory');
    }

    public function orderHistory()
    {
        $orders = Order::join('events','orders.event_id','=','events.id_event')
                        ->get();
        // dd($orders);
        return Inertia::render('Event/OrderHistory',[
            "orders"=>$orders
        ]);
    }
}
