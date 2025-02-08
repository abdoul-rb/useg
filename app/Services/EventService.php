<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Pagination\LengthAwarePaginator;

class EventService
{
    public function getPaginatedEvents($perPage = 10)
    {
        $events = Event::orderBy('date', 'desc')->paginate($perPage);

        return $events;
    }

    public function getEvents(int $perPage): LengthAwarePaginator
    {
        $eventService = new EventService();
        $events = $eventService->getPaginatedEvents($perPage);

        return $events;
    }
}
