<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function show()
    {
        return Inertia::render('Event/Show');
    }
}