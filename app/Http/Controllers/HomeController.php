<?php

namespace App\Http\Controllers;

use App\Services\EventService;

class HomeController extends Controller
{
    public function index(EventService $eventService)
    {
        $events = $eventService->getEvents(3);

        return view('welcome', compact('events'));
    }
}
