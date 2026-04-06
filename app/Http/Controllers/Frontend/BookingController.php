<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        // Simple booking logic (you can expand with seats, status, etc.)
        $booking = Auth::user()->bookings()->create([
            'event_id' => $event->id,
            'quantity' => $request->quantity,
            'total_amount' => $event->price * $request->quantity,
            'status' => 'pending',
        ]);

        // Redirect to payment
        return redirect()->route('payment.khalti.initiate', $booking);
    }

    public function myTickets()
    {
        $bookings = Auth::user()->bookings()->with('event.organizer')->latest()->get();
        return view('frontend.tickets.index', compact('bookings'));
    }
}
