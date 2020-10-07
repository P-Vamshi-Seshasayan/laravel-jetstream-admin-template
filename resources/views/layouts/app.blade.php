<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        [x-cloak] { display: none; }
        /* can be configured in tailwind.config.js */
        .group:hover .group-hover\:block {
            display: block;
        }

        .focus\:cursor-text:focus {
            cursor: text;
        }

        .focus\:w-64:focus {
            width: 16rem;
        }

        /* zendesk styles */
        .h-16 {
            height: 50px;
        }
        .bg-teal-900 {
            background: #03363d;
        }
        .bg-gray-100 {
            background: #f8f9f9;
        }
        .hover\:border-green-500:hover {
            border-color: #78a300;
        }
    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100" x-data="{ data: true }">
    @livewire('navigation-dropdown')

    <!-- Page Heading -->
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

<!-- Page Content -->
    <main>
        <!-- component -->
        <div id="sidenav" class="flex" x-data="{ nav: true }">
            <nav class="flex flex-col bg-gradient-to-b from-gray-200 to-gray-400 dark:bg-gray-900 sm:w-1/4 h-auto z-20 top-0 shadow-2xl"
                 x-cloak x-show = "nav">
                <!-- SideNavBar -->
                <ul class="mt-2">
                    <!-- Links -->
                    <li>
                        <div class="flex items-center justify-between w-full mt-4">
                            <div class="pl-5">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div class="ml-2 mr-auto capitalize font-medium text-black dark:text-gray-300">
                                Tasks
                            </div>
                            <a href="" class="rounded-full focus:outline-none hover:text-white hover:bg-indigo-600 mr-2 p-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </a>
                        </div>
                        <ul class="pl-14">
                            <li class="py-2 hover:text-indigo-600 hover:font-semibold cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal"> Open issues
                            </li>
                            <li class="py-2 hover:text-indigo-600 hover:font-semibold cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal"> Open issues
                            </li>
                            <li class="py-2 hover:text-indigo-600 hover:font-semibold cursor-pointer rounded text-sm text-gray-600  font-normal antialiased tracking-normal"> Open issues
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="flex items-center justify-between w-full mt-4">
                            <div class="pl-5">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                            <div class="ml-2 mr-auto capitalize font-medium text-black dark:text-gray-300">
                                Tags
                            </div>
                            <a href="" class="rounded-full focus:outline-none hover:text-white hover:bg-indigo-600 mr-2 p-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </a>
                        </div>
                        <div class="mt-2 pt-1 pl-8 flex flex-wrap mx-6">
                            <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                Ideas
                            </div>
                            <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                CSE
                            </div>
                            <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                CC
                            </div>
                            <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                VMWare
                            </div>
                            <div class="text-xs mr-2 my-1 uppercase tracking-wider border px-2 text-indigo-600 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">
                                Personal
                            </div>
                        </div>
                    </li>

                </ul>
            </nav>

            <div class="flex-col" x-data="{ isOpen:false }">
                {{ $slot }}
                <div class="fixed inset-0 overflow-hidden " x-show="isOpen" >
                    <div class="absolute inset-0 overflow-hidden" >
                        <!--
                          Background overlay, show/hide based on slide-over state.

                          Entering: "ease-in-out duration-500"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "ease-in-out duration-500"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute inset-0 transition-opacity"></div>
                        <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
                            <!--
                              Slide-over panel, show/hide based on slide-over state.

                              Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                                From: "translate-x-full"
                                To: "translate-x-0"
                              Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                                From: "translate-x-0"
                                To: "translate-x-full"
                            -->
                            <div class="relative w-screen max-w-md">
                                <!--
                                  Close button, show/hide based on slide-over state.

                                  Entering: "ease-in-out duration-500"
                                    From: "opacity-0"
                                    To: "opacity-100"
                                  Leaving: "ease-in-out duration-500"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <div class="h-full flex flex-col space-y-6 py-6 bg-gray-100 shadow-2xl overflow-y-scroll">
                                    <div class="flex items-center justify-between w-full p-3">
                                        <button @click="isOpen = false"
                                                class="p-2 text-gray-500 rounded-full focus:outline-none hover:text-gray-600 hover:bg-gray-200">
                                            <svg class="w-6 h-6 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path fill-rule="nonzero"
                                                      d="M5.20970461,5.38710056 L5.29289322,5.29289322 C5.65337718,4.93240926 6.22060824,4.90467972 6.61289944,5.20970461 L6.70710678,5.29289322 L12,10.585 L17.2928932,5.29289322 C17.6834175,4.90236893 18.3165825,4.90236893 18.7071068,5.29289322 C19.0976311,5.68341751 19.0976311,6.31658249 18.7071068,6.70710678 L13.415,12 L18.7071068,17.2928932 C19.0675907,17.6533772 19.0953203,18.2206082 18.7902954,18.6128994 L18.7071068,18.7071068 C18.3466228,19.0675907 17.7793918,19.0953203 17.3871006,18.7902954 L17.2928932,18.7071068 L12,13.415 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L10.585,12 L5.29289322,6.70710678 C4.93240926,6.34662282 4.90467972,5.77939176 5.20970461,5.38710056 L5.29289322,5.29289322 L5.20970461,5.38710056 Z"/>
                                            </svg>
                                        </button>
                                        <div class="ml-4 mr-auto text-lg font-medium">Info</div>
                                        <button type="button"
                                                class="p-2 text-gray-500 rounded-full focus:outline-none hover:text-gray-600 hover:bg-gray-200">
                                            <svg class="w-6 h-6 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path fill-rule="nonzero"
                                                      d="M7.70710678,20.7071068 C7.5195704,20.8946432 7.26521649,21 7,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,17 C3,16.7347835 3.10535684,16.4804296 3.29289322,16.2928932 L16.5857864,3 C17.3257272,2.26005924 18.5012114,2.22111499 19.2869988,2.88316725 L19.4142136,3 L21,4.58578644 C21.7399408,5.3257272 21.778885,6.50121136 21.1168328,7.28699879 L21,7.41421356 L7.70710678,20.7071068 Z M5,17.4142136 L5,19 L6.58578644,19 L16.5857864,9 L15,7.41421356 L5,17.4142136 Z M18,4.41421356 L16.414,5.99921356 L18,7.58521356 L19.5857864,6 L18,4.41421356 Z"/>
                                            </svg>
                                        </button>
                                        <button type="button"
                                                class="p-2 ml-1 text-gray-500 rounded-full focus:outline-none hover:text-gray-600 hover:bg-gray-200">
                                            <svg class="w-6 h-6 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path fill-rule="nonzero"
                                                      d="M12,16 C13.1045695,16 14,16.8954305 14,18 C14,19.1045695 13.1045695,20 12,20 C10.8954305,20 10,19.1045695 10,18 C10,16.8954305 10.8954305,16 12,16 Z M12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 Z M12,4 C13.1045695,4 14,4.8954305 14,6 C14,7.1045695 13.1045695,8 12,8 C10.8954305,8 10,7.1045695 10,6 C10,4.8954305 10.8954305,4 12,4 Z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <header class="px-4 sm:px-6">
                                            <h2 class="text-lg leading-7 font-medium text-gray-900">
                                                Panel title
                                            </h2>
                                        </header>
                                        <div class="relative flex-1 px-4 sm:px-6">
                                            <!-- Replace with your content -->
                                            <div class="absolute inset-0 px-4 sm:px-6">
                                                <div class="h-full border-2 border-dashed border-gray-200"></div>
                                            </div>
                                            <!-- /End replace -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@stack('modals')
<script>
    window.toggleNav = function(){
        document.getElementById('sidenav').__x.$data.nav = !document.getElementById('sidenav').__x.$data.nav;
    }
</script>
@livewireScripts
</body>
</html>
