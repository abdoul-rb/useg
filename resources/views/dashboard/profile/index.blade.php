@extends('layouts.dashboard')

@section('title', 'Mon profile')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="space-y-10 divide-y divide-gray-900/10">
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
            <div class="px-4 sm:px-0">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Informations</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Mettez à jour vos Informations personnelles.</p>
            </div>
    
            <form action="{{ route('admin.profile.update') }}" class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2" method="POST">
                @csrf
                @method('PATCH')

                <div class="px-4 py-6 sm:p-8">
                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <img class="rounded-full" src="{{ $user->avatar }}" alt="{{ $user->firstname }}">
                                <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 cursor-not-allowed" disabled>
                                    Change
                                </button>
                            </div>
                          </div>

                        <div class="sm:col-span-3">
                            <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                            <div class="mt-2">
                                <input type="text" name="firstname" id="firstname" value="{{ old('firstname', $user->firstname) }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-3">
                            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Prénom</label>
                            <div class="mt-2">
                                <input type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname) }}" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-gray-900 px-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    
        <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3 pt-10">
            <div class="px-4 sm:px-0">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Mot de passe</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Mettez à jour votre mot de passe régulièrement pour sécurisé votre compte</p>
            </div>
    
            <form action="{{ route('admin.profile.update') }}" class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2" method="POST">
                @csrf
                @method('PATCH')
    
                <div class="px-4 py-6 sm:p-8">
                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="current-password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe actuel</label>
                            <div class="mt-2">
                                <input type="password" name="password" id="current-password" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-3">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Nouveau mot de passe</label>
                            <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
            
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Confirmer le mot de passe</label>
                            <div class="mt-2">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-800 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-gray-900 px-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection