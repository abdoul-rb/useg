<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Services\EventService;
use Illuminate\Pagination\LengthAwarePaginator;

class EventController extends Controller
{
    public function index()
    {
        $events = $this->getEvents(10);

        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    private function getEvents(int $perPage): LengthAwarePaginator
    {
        $eventService = new EventService();
        $events = $eventService->getPaginatedEvents($perPage);

        return $events;
    }
}
