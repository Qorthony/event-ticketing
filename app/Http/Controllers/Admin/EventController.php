<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $request->validate([
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
}
