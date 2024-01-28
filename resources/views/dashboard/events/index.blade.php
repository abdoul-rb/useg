@extends('layouts.dashboard')

@section('title', 'Nos événements')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl tracking-wider font-semibold leading-6 text-gray-900">
            Nos événements organisés
        </h1>

        <div class="mt-4 flex flex-col pb-10 lg:pb-14">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div class="sm:col-span-1">
                                <!-- Action left -->
                            </div>
        
                            <div class="sm:col-span-2 md:grow">
                                <div class="flex justify-end gap-x-2">
                                    <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                        <a href="{{ route('dashboard.events.create') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="flex-shrink-0 w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                            </svg>
                                            Ajouter un événement
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-sm font-semibold tracking-wide text-gray-800">
                                                Titre de l'event
                                            </span>
                                        </div>
                                    </th>
        
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-sm font-semibold tracking-wide text-gray-800">
                                                Description
                                            </span>
                                        </div>
                                    </th>
        
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-sm font-semibold tracking-wide text-gray-800">
                                            Date
                                            </span>
                                        </div>
                                    </th>
        
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Action</span>
                                    </th>
                                </tr>
                            </thead>
        
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($events as $event)
                                    <tr class="bg-white hover:bg-gray-50">
                                        <td class="h-px w-px whitespace-nowrap align-top">
                                            <a class="block p-6" href="#">
                                                <div class="flex items-center gap-x-4">
                                                    <img class="flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-lg object-cover" src="{{ $event->getFeaturedImage() }}" alt="{{ $event->title }}">
                                                    <div>
                                                        <span class="block text-sm font-semibold text-gray-800">
                                                            {{ $event->title }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
            
                                        <td class="h-px w-40 min-w-[10rem] whitespace-nowrap align-center">
                                            <span class="p-6 flex items-center text-sm font-medium text-gray-500">
                                                {{ truncate($event->description, 50) }}
                                            </span>
                                        </td>
            
                                        <td class="h-px w-px whitespace-nowrap align-center">
                                            <a class="block p-6" href="#">
                                                <div class="grow">
                                                    <time datetime="{{ formatDate($event->date) }}" class="block text-sm text-gray-500">
                                                        {{ formatDate($event->date) }}
                                                    </time>
                                                </div>
                                            </a>
                                        </td>
            
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-2" x-data="{ dropdownOpen: false }" @keydown.escape.stop="dropdownOpen = false; focusButton()" @click.away="dropdownOpen = false">
                                                <div class="relative inline-block text-left">
                                                    <div>
                                                        <button type="button" class="flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-0 focus:ring-indigo-500 focus:ring-offset-0 focus:ring-offset-gray-100" id="menu-button" x-ref="button" @click="dropdownOpen = !dropdownOpen" @keyup.space.prevent="dropdownOpen = !dropdownOpen" @keydown.enter.prevent="dropdownOpen = !dropdownOpen" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="dropdownOpen.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                                            <span class="sr-only">Action</span>
                                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                
                                                    <div x-show="dropdownOpen" class="absolute bottom-0 right-4 z-20 mt-2 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 duration divide-y divide-gray-200 min-w-[10rem] p-2 block" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" x-ref="menu-items" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                                                        <div class="py-1" role="none">
                                                            <div class="py-0 first:pt-0 last:pb-0">
                                                                <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400">
                                                                    Actions
                                                                </span>
                                                                <a href="{{ route('dashboard.events.edit', $event) }}" class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                                                                    Modifier
                                                                </a>
                                                            </div>
                                                            <div class="first:pt-0 last:pb-0">
                                                                <form action="{{ route('dashboard.events.destroy', $event) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="w-full flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-red-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                                                                        Supprimer
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        
                    <div class="mt-6">
                        <!-- Paginate --> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection