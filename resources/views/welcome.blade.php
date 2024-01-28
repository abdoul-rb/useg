@extends('layouts.app')

@section('title', 'Union Scolaire et Estudiantine de Guinée')

@section('content')
    <main>
        <div class="bg-gray-900 relative py-28 sm:py-32 ">
            <div class="blur-[138px] absolute inset-0 m-auto max-w-7xl h-[230px]" style="background:linear-gradient(106.89deg, rgba(192, 132, 252, 0.11) 15.73%, rgba(14, 165, 233, 0.41) 15.74%, rgba(232, 121, 249, 0.26) 56.49%, rgba(79, 70, 229, 0.4) 115.91%)"></div>
            <div class="relative">
                <section>
                    <div class="max-w-7xl mx-auto px-8 sm:px-0 items-center gap-12 text-gray-600 flex flex-col sm:justify-center sm:text-center xl:flex-row xl:text-left">
                        <div class="flex-none space-y-5 max-w-4xl xl:max-w-2xl">
                            <h1 class="text-4xl text-white font-extrabold sm:text-5xl">
                                Éduquer, inspirer et agir
                            </h1>
                            <p class="text-gray-300 max-w-xl sm:mx-auto xl:mx-0">
                                L'USEG bâtit l'avenir de la Guinée, un enfant à la fois. <br>
                                Facilitez l'accès de l'éducation à tous sans distinctions de sexes ni de langues en Guinée.
                            </p>
                            <div class="items-center gap-x-3 font-medium text-sm flex sm:justify-center xl:justify-start">
                                <a href="/#pricing" class="py-2.5 px-4 text-center rounded-lg duration-150 block text-white bg-sky-500 hover:bg-sky-600 active:bg-sky-700">
                                    Faire un don
                                </a>
                                <a href="/#cta" class="py-2.5 px-4 text-center rounded-lg duration-150 block text-gray-100 bg-gray-700 hover:bg-gray-800">
                                    En savoir plus
                                </a>
                            </div>
                        </div>

                        <div class="flex-1 w-full sm:max-w-2xl xl:max-w-xl">
                            <div class="relative">
                                <img alt="Élèves" src="https://images.unsplash.com/photo-1548102268-3d7dc56b01e1?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGFmcmljYW4lMjBzdHVkZW50fGVufDB8fDB8fHww"
                                    width="490" height="284" decoding="async" data-nimg="1"
                                    class="rounded-lg w-full object-cover" loading="lazy" style="color:transparent">
                                <button aria-label="Video player button" class="absolute w-14 h-10 rounded-lg inset-0 m-auto duration-150 bg-gray-800 hover:bg-gray-700 ring-offset-2 focus:ring text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 m-auto">
                                        <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-8 py-10 sm:px-6 lg:px-8 lg:py-14">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="lg:col-span-7">
                    <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center lg:-translate-x-10">
                        <div class="col-span-4">
                            <img class="rounded-xl" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80" alt="Image Description">
                        </div>
            
                        <div class="col-span-3">
                            <img class="rounded-xl" src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
                        </div>
            
                        <div class="col-span-5">
                            <img class="rounded-xl" src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80" alt="Image Description">
                        </div>
                    </div>
                </div>
        
                <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-5">
                    <div class="space-y-6 sm:space-y-8">
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-slate-800">
                                Nos Actions en images
                            </h2>
                            <p class="text-slate-500">
                                Découvrez en images les moments forts de notre engagement. Chaque initiative, chaque sourire partagé, chaque geste compte dans notre mission commune pour une éducation meilleure en Guinée.
                            </p>
                        </div>
            
                        <ul role="list" class="space-y-2 sm:space-y-4">
                            <li class="flex space-x-3">
                                <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                    
                                <span class="text-sm sm:text-base text-gray-500">
                                    Distribution de Fournitures Scolaires
                                </span>
                            </li>
                
                            <li class="flex space-x-3">
                                <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                    
                                <span class="text-sm sm:text-base text-gray-500">
                                    Soutien Communautaire
                                </span>
                            </li>
                
                            <li class="flex space-x-3">
                                <span class="mt-0.5 h-5 w-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="flex-shrink-0 h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                    
                                <span class="text-sm sm:text-base text-gray-500">
                                    Événements Éducatifs
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <p class="text-slate-500 text-center max-w-4xl mx-auto mt-12">
                Découvrez en images les moments forts de notre engagement. Chaque initiative, chaque sourire partagé, chaque geste compte dans notre mission commune pour une éducation meilleure en Guinée.
            </p>
        </div>

        <section id="about-us" class="py-16 sm:py-28 bg-gray-50 sm:my-16">
            <div class="max-w-7xl mx-auto px-8 text-gray-600 ">
                <div class="max-w-3xl space-y-3">
                    <h2 class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                        Joignez vous à nous pour soutenir notre cause
                    </h2>
                    <p>
                        Chaque image raconte une histoire de progrès, d'espoir et de détermination. Ensemble, nous faisons la différence. Explorez nos actions concrètes et rejoignez-nous dans notre mission continue pour une éducation épanouissante.
                    </p>
                </div>
                <div class="mt-12">
                    <ul class="grid gap-y-8 gap-x-12 sm:grid-cols-2 lg:grid-cols-3">
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"></path>
                                </svg>
                            </div>
                            <div>
                                {{-- <h3 class="text-lg text-gray-800  font-semibold">
                                    Lifetime access
                                </h3> --}}
                                <p class="">
                                    Défendre l'intérêt général des élèves et étudiants et veiller à l'amélioration des conditions d'étude
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="">
                                    Assurer l'accès de tous à une éducation de qualité et de promouvoir l'apprentissage tout au long de la vie
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="">
                                    Défendre les intérêts moraux et matériels, tant collectifs qu'individuels, actuel et avenir des élèves et étudiants
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                    <path d="M14.8204 4.26001C14.6218 4.6157 14.4448 4.98303 14.2904 5.36001C12.7732 5.12006 11.2276 5.12006 9.71041 5.36001C9.556 4.98303 9.37901 4.6157 9.18041 4.26001C7.75119 4.50421 6.36181 4.94155 5.05041 5.56001C2.70535 8.9443 1.64184 13.053 2.05041 17.15C3.57864 18.2989 5.29386 19.1751 7.12041 19.74C7.53632 19.1906 7.90751 18.6087 8.2304 18C7.63448 17.7803 7.0617 17.5023 6.52041 17.17C6.66887 17.0712 6.8093 16.9609 6.94041 16.84C8.51887 17.6003 10.2484 17.9952 12.0004 17.9952C13.7524 17.9952 15.4819 17.6003 17.0604 16.84C17.2004 16.96 17.3404 17.07 17.4804 17.17C16.9362 17.4997 16.364 17.7807 15.7704 18.01C16.0799 18.6325 16.4412 19.228 16.8504 19.79C18.6747 19.227 20.3869 18.3506 21.9104 17.2C22.3288 13.1022 21.2644 8.99019 18.9104 5.61001C17.6137 4.97875 16.2381 4.52468 14.8204 4.26001ZM8.68041 14.81C8.17999 14.7741 7.71295 14.5457 7.37733 14.1728C7.0417 13.7999 6.8636 13.3114 6.88041 12.81C6.86107 12.3079 7.03829 11.8181 7.37442 11.4446C7.71054 11.0711 8.17907 10.8435 8.68041 10.81C9.18175 10.8435 9.65027 11.0711 9.98639 11.4446C10.3225 11.8181 10.4997 12.3079 10.4804 12.81C10.4997 13.3121 10.3225 13.8019 9.98639 14.1754C9.65027 14.5489 9.18175 14.7765 8.68041 14.81ZM15.3204 14.81C14.82 14.7741 14.3529 14.5457 14.0173 14.1728C13.6817 13.7999 13.5036 13.3114 13.5204 12.81C13.5011 12.3079 13.6783 11.8181 14.0144 11.4446C14.3505 11.0711 14.8191 10.8435 15.3204 10.81C15.8227 10.841 16.2927 11.0679 16.6294 11.442C16.966 11.816 17.1423 12.3073 17.1204 12.81C17.1423 13.3128 16.966 13.804 16.6294 14.1781C16.2927 14.5521 15.8227 14.779 15.3204 14.81Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="">
                                    Recueillir et reverser des fonds et des biens dans le cadre de son objes pour soutenir des projets éducatifs
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                    <path d="M9.00033 22H10.0003V20H9.01133C8.70333 19.994 6.00033 19.827 6.00033 16C6.00033 14.007 5.33533 12.754 4.49833 12C5.33533 11.246 6.00033 9.993 6.00033 8C6.00033 4.173 8.70333 4.006 9.00033 4H10.0003V2H8.99833C7.26933 2.004 4.00033 3.264 4.00033 8C4.00033 10.8 2.32233 10.99 1.98633 11L2.00033 13C2.08233 13 4.00033 13.034 4.00033 16C4.00033 20.736 7.26933 21.996 9.00033 22ZM22.0003 11C21.9183 11 20.0003 10.966 20.0003 8C20.0003 3.264 16.7313 2.004 15.0003 2H14.0003V4H14.9893C15.2973 4.006 18.0003 4.173 18.0003 8C18.0003 9.993 18.6653 11.246 19.5023 12C18.6653 12.754 18.0003 14.007 18.0003 16C18.0003 19.827 15.2973 19.994 15.0003 20H14.0003V22H15.0023C16.7313 21.996 20.0003 20.736 20.0003 16C20.0003 13.2 21.6783 13.01 22.0143 13L22.0003 11Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="">
                                    Créer et animer des rencontres en liens avec l'éducation
                                </p>
                            </div>
                        </li>
                        <li class="flex gap-x-4">
                            <div class="flex-none w-12 h-12 bg-white  border  text-blue-600  rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="">
                                    Veiller à la bonne insertion socio-professionnelle des étudiants diplômés
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="py-16 sm:py-28 ">
            <div class="max-w-7xl mx-auto px-8 text-gray-600">
                <div class="md:flex md:items-end md:justify-between">    
                    <div class="max-w-3xl space-y-3">
                        <h2 class="text-gray-800 text-2xl font-semibold sm:text-3xl">
                            Plongez dans l'univers captivant de l'USEG
                        </h2>
                        <p>
                            Chaque événement est une célébration de l'éducation, de la solidarité, et de l'avenir prometteur que nous construisons ensemble. 
                            Découvrez nos moments forts.
                        </p>
                    </div>

                    <div class="mt-2 md:mt-0 text-cyan-500 text-sm font-semibold tracking-wide">
                        <a href="{{ route('home.events') }}" class="hover:translate-x-4 transition duration-150 ease-out">
                            Voir tous les événements &rarr;
                        </a>
                    </div>
                </div>

                <div class="mt-12">
                    <ul class="grid gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($events as $event)
                            {{-- @dump(env('STRAPI_BASE_URL') . $event['attributes']['Image']['data']['attributes']['url']) --}}
                            <li>
                                <div class="space-y-2 sm:max-w-sm">
                                    <a href="#">
                                        <img src="https://images.unsplash.com/photo-1520254553641-2eed4cf2ef26?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGFmcmljYW5zfGVufDB8fDB8fHww" class="rounded-lg w-full" alt="Introduction to computer science">
                                    </a>
                                    <div class="pt-2 text-sm flex items-center justify-between">
                                        <span class=" text-blue-600 font-semibold">
                                            {{ $event['attributes']['type']['data']['attributes']['Nom'] }}
                                        </span>
                                        <span class="text-xs text-gray-700 font-semibold">{{ formatDate($event['attributes']['Date']) }}</span>
                                    </div>
                                    <h3 class="block text-gray-800 text-lg font-medium">
                                        <a href="#">
                                            {{ $event['attributes']['Titre'] }}
                                        </a>
                                    </h3>
                                    <p class="leading-5 text-slate-700">
                                        {{ truncate($event['attributes']['Description'], 100) }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        
        <div id="donations" class="bg-gray-900 relative py-28 sm:py-32 overflow-hidden sm:my-16">
            <div class="blur-[138px] absolute inset-0 m-auto max-w-7xl h-[230px]" style="background:linear-gradient(106.89deg, rgba(192, 132, 252, 0.11) 15.73%, rgba(14, 165, 233, 0.41) 15.74%, rgba(232, 121, 249, 0.26) 56.49%, rgba(79, 70, 229, 0.4) 115.91%)"></div>
            <div class="relative">
                <div class="max-w-7xl mx-auto px-8 gap-12 justify-between md:flex">
                    <div class="relative max-w-2xl text-gray-300">
                        <h2 class="text-gray-50 text-3xl font-semibold sm:text-4xl">
                            Soutenez notre cause
                        </h2>
                        <p class=" max-w-xl">
                            Ensemble pour une éducation florissante en Guinée, l'USEG s'engage à surmonter les obstacles et à faire briller la lumière du savoir.
                        </p>

                        <p class="max-w-2xl mt-4">
                            Rejoignez-nous dans notre quête pour surmonter les défis éducatifs et écrire ensemble l'histoire d'une Guinée éduquée et prospère.
                        </p>
                    </div>
                    <div class="mt-12 bg-white /50 rounded-xl shadow-lg md:mt-0">
                        <div class="h-full p-6 space-y-5">
                            <div class="flex flex-wrap items-center justify-between gap-3">
                                <span class="text-2xl text-gray-800 font-semibold">
                                    Faites un don
                                </span>
                            </div>

                            <div class="mt-2 -space-y-px rounded-md bg-white shadow-sm">
                                <div>
                                  <label for="card-number" class="sr-only">Card number</label>
                                  <input type="text" name="card-number" id="card-number" class="relative block w-full rounded-none rounded-t-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Card number">
                                </div>
                                <div class="flex -space-x-px">
                                  <div class="w-1/2 min-w-0 flex-1">
                                    <label for="card-expiration-date" class="sr-only">Expiration date</label>
                                    <input type="text" name="card-expiration-date" id="card-expiration-date" class="relative block w-full rounded-none rounded-bl-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="MM / YY">
                                  </div>
                                  <div class="min-w-0 flex-1">
                                    <label for="card-cvc" class="sr-only">CVC</label>
                                    <input type="text" name="card-cvc" id="card-cvc" class="relative block w-full rounded-none rounded-br-md border-0 bg-transparent py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="CVC">
                                  </div>
                                </div>
                            </div>

                            <button role="button" class="block w-full text-white bg-gray-800 focus:ring shadow px-4 py-2.5 font-medium text-sm text-center duration-150 rounded-lg">
                                Donner maintenant
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>  
@endsection
