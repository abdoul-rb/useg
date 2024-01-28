@extends('layouts.dashboard')

@section('title', 'Tableau de bord')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="relative h-[576px] overflow-hidden rounded-xl border border-dashed border-gray-400 opacity-75">
            <svg class="absolute inset-0 h-full w-full stroke-gray-900/10" fill="none">
            <defs>
                <pattern id="pattern-1526ac66-f54a-4681-8fb8-0859d412f251" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M-3 13 15-5M-5 5l18-18M-1 21 17 3"></path>
                </pattern>
            </defs>
            <rect stroke="none" fill="url(#pattern-1526ac66-f54a-4681-8fb8-0859d412f251)" width="100%" height="100%"></rect>
            </svg>
        </div>
    </div>
@endsection