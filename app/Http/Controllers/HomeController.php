<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Services\EventService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $events = $this->getEvents(3);

        return view('welcome', compact('events'));
    }

    public function events()
    {
        $events = $this->getEvents(10);

        return view('events.index', compact('events'));
    }

    private function getEvents(int $perPage): LengthAwarePaginator
    {
        $eventService = new EventService();
        $events = $eventService->getPaginatedEvents($perPage);

        return $events;
    }
}
