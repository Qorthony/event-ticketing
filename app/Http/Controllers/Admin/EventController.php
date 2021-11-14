<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TiketEvent;
use App\Models\Event;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    private $dummyPoster = "https://www.namastra.co.id/img?src=9fa8a5b94738aa2ba3d214d77c0aff1e.jpg&width=1200&height=860";

    public function __construct()
    {
        $this->middleware('auth.admin');

    }

    public function index()
    {
        return view('admins.events.index', [
            'page'=>'event',
            'events'=>  Event::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required|string',
            'jenis_event' => 'required|string|max:20',
            'tgl_event' => 'required|date',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'kuota' => 'required|integer',
            'penyelenggara' => 'required|string',
            'poster' => 'required',
            'deskripsi' => 'required'
        ]);

        // dd($validated);

        $path = $request->file('poster')->store('events','public');

        if ($path!==false) {
            $event = new Event();
            $event->nama_event = $request->nama_event;
            $event->jenis_event = $request->jenis_event;
            $event->tgl_event = $request->tgl_event;
            $event->lokasi = $request->lokasi;
            $event->harga = $request->harga;
            $event->kuota = $request->kuota;
            $event->penyelenggara = $request->penyelenggara;
            $event->poster_url = $path;
            $event->deskripsi = $request->deskripsi;
            $event->status_verifikasi = "acc";
            $event->admin_id = Auth::guard('admin')->id();
            $result = $event->save();
            // dd($result);
            return redirect(route('admin.event.index'))->with('alert_success', 'Berhasil Membuat Event dengan nama : '.$event->nama_event);
        }
        // dd("gagal upload");

        return back()->with('alert_error', 'gagal upload');

    }

    public function update(Request $request,Event $event)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required|string',
            'jenis_event' => 'required|string|max:20',
            'tgl_event' => 'required|date',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'kuota' => 'required|integer',
            'penyelenggara' => 'required|string',
            'deskripsi' => 'required'
        ]);

        if ($request->has('poster')) {
            $path = $request->file('poster')->store('events','public');
            $validatedData['poster_url'] = $path;
        }

        Event::where('id_event', $event->id_event)->update($validatedData);

        return redirect('/admin/event')->with('alert_success','Berhasil update event : '.$event->nama_event);
    }

    public function destroy(Event $event)
    {
        Event::destroy($event->id_event);
        return redirect(route('admin.event.index'))->with('alert_success', $event->nama_event.' Berhasil dihapus!');
    }

    public function pesanan()
    {
        $payments = Payment::join('orders','payments.id_payment','=','orders.payment_id')
                            ->join('events','orders.event_id','=','events.id_event')
                            ->where('status_order','MV')
                            ->get();
        // dd($payment);
        return view('admins.events.pesanan', [
            'page'=>'pesanan',
            'payments'=>$payments
        ]);
    }

    public function terimaPayment(Payment $payment)
    {
        $updatedOrder = Order::where('payment_id', $payment->id_payment)
                        ->update([
                            'status_order'=>'ACC'
                        ]);
        $payment->admin_id=Auth::guard('admin')->id();

        $order = Order::join('users','orders.user_id','=','users.id')
                        ->join('events', 'orders.event_id','=','events.id_event')
                        ->where('payment_id', $payment->id_payment)
                        ->first();
        // dd($updatedOrder, $order);
        Mail::to(User::find($order->user_id)->email)->send(new TiketEvent($order));

        return redirect('/admin/event/pesanan')->with('alert_success','Berhasil terima pesanan : '.$payment->id_payment);
    }

    public function tolakPayment(Payment $payment)
    {
        $order = Order::where('payment_id', $payment->id_payment)
                        ->update([
                            'status_order'=>'PR'
                        ]);
        $payment->admin_id=Auth::guard('admin')->id();

        return redirect('/admin/event/pesanan')->with('alert_success','Berhasil tolak pesanan : '.$payment->id_payment);
    }
}
