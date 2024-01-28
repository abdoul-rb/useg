<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Services\EventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $baseURL = env('STRAPI_API_URL');
        $response = Http::get("$baseURL/events?populate=*");

        $events = $response->json()['data'];

       /*  $eventService = new EventService();
        $events = $eventService->getPaginatedEvents(3); */

        return view('welcome', compact('events'));
    }

    public function events()
    {
        $baseURL = env('STRAPI_API_URL');
        $response = Http::get("$baseURL/events?populate=*");

        $events = $response->json()['data'];

        /*  $eventService = new EventService();
        $events = $eventService->getPaginatedEvents(20); */

        return view('events.index', compact('events'));
    }
}
