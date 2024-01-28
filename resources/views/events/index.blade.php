@extends('layouts.app')

@section('title', 'Nos événements')

@section('content')
<div class="max-w-7xl mx-auto px-8 py-10 sm:px-6 lg:px-0 lg:py-14 text-gray-600">
    <div class="flex items-end justify-between">    
        <div class="max-w-3xl space-y-3">
            <h2 class="text-gray-800 text-2xl font-semibold sm:text-3xl">
                Tous nos événements
            </h2>
            <p>
                Découvrez nos moments forts, soyez inspirés par nos initiatives et rejoignez-nous dans cette belle aventure vers une éducation 
                meilleure pour tous.
            </p>
        </div>
    </div>

    <div class="mt-12">
        <ul class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($events as $event)
                {{-- @dump(env('STRAPI_BASE_URL') . $event['attributes']['Image']['data']['attributes']['url']) --}}
                <li>
                    <div class="space-y-2 sm:max-w-sm">
                        <a href="#">
                            <img src="{{ $event->featured_image }}" class="rounded-lg w-full h-56 object-cover" alt="{{ $event->title }}">
                        </a>
                        <div class="pt-2 text-sm flex items-center justify-between">
                            <span class=" text-blue-600 font-semibold">
                                {{ $event->title }}
                            </span>
                            <span class="text-xs text-gray-700 font-semibold">{{ formatDate($event->date) }}</span>
                        </div>
                        <h3 class="block text-gray-800 text-lg font-medium">
                            <a href="#">
                                {{ $event->title }}
                            </a>
                        </h3>
                        <p class="leading-5 text-slate-700">
                            {{ truncate($event->description, 100) }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection