<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\EventRequestNotification;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends BaseController
{
    public function home()
    {
        $events = Event::where('date', '>=', now())
            ->orderBy('id', 'desc')
            ->get();
        $organizers = Organizer::where('expire_date', '>=', now())
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.home', compact('organizers', 'events'));
    }

    public function event_request(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:organizers',
            'contact' => 'required',
            'event_name' => 'required',
            'event_type' => 'required',
        ]);

        $organizer = new Organizer();
        $organizer->name = $request->name;
        $organizer->email = $request->email;
        $organizer->contact = $request->contact;
        $organizer->event_name = $request->event_name;
        $organizer->event_type = $request->event_type;
        $organizer->save();
        Mail::to("vikasbsnt123@gmail.com")->send(new EventRequestNotification($organizer));
        return redirect()->back();
    }

    public function organizer(Request $request, $id)
{
if($request->sort){
    if($request->sort == 'asc'){
        $organizer = Organizer::where('expire_date', '>=', now())
        ->where('id', $id)
        ->orderBy('created_at', 'asc')
        ->first();
    }else{
        $organizer = Organizer::where('expire_date', '>=', now())
        ->where('id', $id)
        ->orderBy('created_at', 'desc')
        ->first();
    }
}
    $organizer = Organizer::where('expire_date', '>=', now())
        ->where('id', $id)
        ->first();

    if (!$organizer) {
        return redirect()->back()->with('error', 'Organizer not found or expired');
    }

    $events = $organizer->events ?? [];

    return view('frontend.organizer', compact('organizer', 'events'));
}
}
