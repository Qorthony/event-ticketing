<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show()
    {
        return Inertia::render('Event/Show');
    }

    public function detail($id)
    {
        return Inertia::render('Event/Detail',['id'=>$id]);
    }

    public function showPayment($id)
    {
        return Inertia::render('Event/Payment', ['id'=>$id]);
    }

    public function orderHistory()
    {
        return Inertia::render('Event/OrderHistory');
    }
}
