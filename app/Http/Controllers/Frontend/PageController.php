<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Organizer;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home(){
        return view('frontend.home');
    }
public function event_request( Request $request){
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

return redirect()->back();
}

}
