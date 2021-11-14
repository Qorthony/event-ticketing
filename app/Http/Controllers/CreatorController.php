<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CreatorController extends Controller
{

    private function getCreatorId()
    {
        $creator = User::where('id', Auth::guard('web')->id())->select('creator_id')->first();
        return $creator->creator_id;
    }

    public function first()
    {
        return Inertia::render('Creator/First');
    }

    public function regist(Request $request)
    {
        $validated = $request->validate([
            'nama_bank'=>'required|string|min:3',
            'no_rek'=>'required|numeric|min:5',
            'nama_rek'=>'required|string'
        ]);

        $creator = Creator::create($validated);

        User::where('id', Auth::guard('web')->id())
                ->update([
                    'creator_id'=>$creator->id_creator
                ]);

        return redirect('/creator');
    }

    public function index()
    {
        // dd($this->getCreatorId());
        $events = Event::where('creator_id', $this->getCreatorId())->get();
        // dd($event);
        return Inertia::render('Creator/Index', [
            'events'=>$events
        ]);
    }

    public function buatEvent()
    {
        return Inertia::render('Creator/CreateEvent');
    }

    public function storeEvent(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required|string',
            'jenis_event' => 'required|string|max:20',
            'tgl_event' => 'required|date',
            'lokasi' => 'required|string',
            'harga' => 'required|integer',
            'kuota' => 'required|integer',
            'penyelenggara' => 'required|string',
            'poster' => 'required|image',
            'deskripsi' => 'required'
        ]);

        $path = $request->file('poster')->store('events','public');

        if ($path!==false){
            $validated['poster_url'] = $path;
            $validated['status_verifikasi'] = "wait";
            $validated['creator_id'] = $this->getCreatorId();
        }

        $event = Event::create($validated);

        // dd($event);
        return redirect('/creator')->with('success', 'Berhasil membuat event');
    }
}
