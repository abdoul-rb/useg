@extends('layouts.dashboard')

@section('title', 'Edition d\'un événement')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="space-y-10 divide-y divide-gray-900/10">
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
            <div class="px-4 sm:px-0">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Modifier d'un nouvel événement</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Mettez à jour des événement ici et rendez les visible sur votre page</p>
            </div>
    
            @include('dashboard.events._form')
        </div>
    </div>
</div>
@endsection