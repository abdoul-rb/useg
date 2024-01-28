<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventService = new EventService();
        $events = $eventService->getPaginatedEvents();

        return view('dashboard.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['nullable', 'string', 'min:20'],
            'date' => ['nullable', 'date'],
            'featured_image' => ['nullable', 'image', 'max:4000'],
        ]);

        /** @var Illuminate\Http\UploadedFile|null $image */
        $image = $request->featured_image;

        if ($image !== null && !$image->getError()) {
            $image = $image->store('events', 'public');
        }

        $request->user()->events()->create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'featured_image' => $image,
        ]);

        return redirect()->route('dashboard.events.index')->with(
            'success',
            'La event a été créé avec succès'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('dashboard.formations.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'description' => ['nullable', 'string', 'min:20'],
            'date' => ['nullable', 'date'],
            'featured_image' => ['nullable', 'image', 'max:4000'],
        ]);

        /** @var Illuminate\Http\UploadedFile|null $image */
        $image = $request->featured_image;

        if ($image !== null && !$image->getError()) {
            $image = $image->store('events', 'public');
        }

        $event->create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'featured_image' => $image ?? $event->featured_image,
        ]);

        return redirect()->route('dashboard.events.index')->with(
            'success',
            'La event a été mise à jour avec succès'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.formations.index')->with(
            'success',
            'Le event a été supprimé avec succès'
        );
    }
}
