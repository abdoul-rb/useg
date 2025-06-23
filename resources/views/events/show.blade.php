@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <div class="max-w-4xl mx-auto px-8 py-10 sm:px-6 lg:px-0 lg:py-14 text-gray-600">
        <div class="flex items-end justify-between">
            <div class="max-w-3xl space-y-3">
                <h2 class="text-sm font-medium text-black/50 uppercase">
                    Événement
                </h2>

                <h1 class="mt-3 text-lime-700 text-lg font-bold text-black/50">
                    {{ $event->title }}
                </h1>

                <div class="mt-5 lg:flex lg:items-center gap-2">
                    <div
                        class="flex items-center justify-center lg:justify-start gap-2 px-3 py-2 border border-black/10 rounded-md">
                        <svg class="size-5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 20 20" fill="none">
                            <path
                                d="M10.0007 4.16732C10.4609 4.16732 10.834 4.54041 10.834 5.00065V9.59308L14.2623 12.2595C14.6256 12.5421 14.691 13.0656 14.4084 13.4289C14.1259 13.7922 13.6023 13.8577 13.239 13.5751L9.48903 10.6584C9.28604 10.5006 9.16732 10.2578 9.16732 10.0007V5.00065C9.16732 4.54041 9.54041 4.16732 10.0007 4.16732Z"
                                fill="#92929D" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.0007 0.833984C15.0633 0.833984 19.1673 4.93804 19.1673 10.0007C19.1673 15.0633 15.0633 19.1673 10.0007 19.1673C4.93804 19.1673 0.833984 15.0633 0.833984 10.0007C0.833984 4.93804 4.93804 0.833984 10.0007 0.833984ZM10.0007 2.50065C5.85851 2.50065 2.50065 5.85851 2.50065 10.0007C2.50065 14.1428 5.85851 17.5006 10.0007 17.5006C14.1428 17.5006 17.5006 14.1428 17.5006 10.0007C17.5006 5.85851 14.1428 2.50065 10.0007 2.50065Z"
                                fill="#92929D" />
                        </svg>
                        <span class="text-sm text-black/50">
                            {!! $event->date->isoFormat('ddd D MMM YYYY, HH[h]mm') !!}
                        </span>
                    </div>

                    {{-- <div
                        class="mt-2 lg:mt-0 flex items-center justify-center lg:justify-start gap-2 px-3 py-2 border border-i-secondary rounded-md">
                        <x-ui.avatars :images="$lesson->users->pluck('profile_photo_url')->toArray()" size="size-5" />
                        <span class="text-sm text-black font-medium">
                            {!! __('Suivie par <span class="text-i-secondary">:count :label</span>', [
                                'count' => $lesson->users_count,
                                'label' => pluralize($lesson->users_count, 'Lumie'),
                            ]) !!}
                        </span>
                    </div> --}}
                </div>

                <img src="{{ $event->getFeaturedImage() }}" class="rounded-lg w-full h-72 object-cover"
                    alt="{{ $event->title }}" />
            </div>
        </div>

        <div class="mt-12">
            <p class="prose lg:prose-sm prose-img:object-cover text-black/90 max-w-none">
                {!! str($event->description)->markdown()->sanitizeHtml() !!}
            </p>
        </div>
    </div>
@endsection
