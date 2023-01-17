<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index()
    {
        $event = Event::with('event_gallery')->get();

        $data = [
            'events' => $event,
            'title' => 'events'
        ];
        return view('events', $data);
    }
}
