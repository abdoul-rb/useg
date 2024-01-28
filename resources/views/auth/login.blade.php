<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USEG - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased h-full">
        <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="USEG">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Accédez à votre compte</h2>
            </div>
        
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ route('auth.login.authenticate') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-white">Adresse email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6">
                        </div>
                    </div>
            
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Mot de passe</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Mot de passe oublié ?</a>
                            </div>
                        </div>

                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6">
                        </div>
                    </div>
            
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">
                            Se connecter
                        </button>
                    </div>
                </form>
        
                <p class="mt-10 text-center text-sm text-gray-400">
                    Vous avez pas accès?
                    <a href="#" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Contactez l'administrateur</a>
                </p>
            </div>
        </div>
    </body>
</html>