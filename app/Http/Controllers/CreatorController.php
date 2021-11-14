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
        $event = Event::find(18);
        // dd($event);
        return Inertia::render('Creator/Index', [
            'event'=>$event
        ]);
    }
}
