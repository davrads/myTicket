<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function show(Event $event)
    {
        $event->load('organizer');

        // Related events from same organizer
        $relatedEvents = Event::where('organizer_id', $event->organizer_id)
            ->where('id', '!=', $event->id)
            ->where('date', '>=', now())
            ->take(3)
            ->get();

        return view('frontend.events.show', compact('event', 'relatedEvents'));
    }
}
