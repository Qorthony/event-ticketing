<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CreatorController extends Controller
{
    public function first()
    {
        return Inertia::render('Creator/First');
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
