<?php

namespace App\Services;

use App\Models\Event;

class EventService
{
    public function getPaginatedEvents($perPage = 10)
    {
        $events = Event::orderBy('date', 'desc')->paginate($perPage);

        return $events;
    }
}