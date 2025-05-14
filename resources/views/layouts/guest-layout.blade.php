<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>SESWARE</title>

    @include('partials.links')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>

<body class="p-0 m-0 list-none">
    {{-- HEADER/NAV BAR --}}
    <nav
        class="mx-0 px-6 lg:px-12 py-2 lg:text-inherit flex justify-between lg:py-4 lg:flex lg:justify-between lg:gap-6 items-center sticky top-0 z-50 bg-blue-950 opacity-95">
        <div class="h-10 w-1/4  lg:h-16 lg:w-1/5 bg-contain bg-no-repeat"
            style="background-image: url('./images/logo.png')">
        </div>
        <div class="lg:flex lg:space-x-4 lg:justify-between lg:w-fit text-font text-lg hidden text-white">
            <a href="{{ route('home') }}">
                <li>Home</li>
            </a>

            <a href="{{ route('about') }}">
                <li>About Us</li>
            </a>

            <a href="{{ route('service') }}">
                <li>Services</li>
            </a>

            <a href="{{ route('works') }}">
                <li>Works</li>
            </a>

            <a href="{{ route('contact') }}">
                <li>Contact us</li>
            </a>
        </div>
        <div class="lg:hidden text-white text-lg">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-x" style="display: none"></i>
        </div>
    </nav>

    @yield('content')

    {{-- FOOTER --}}
    <section class="w-full p-6 lg:p-12 font-text text-slate-300 bg-gradient-to-r from-blue-950 to-blue-800">
        <div class="flex flex-col lg:flex-row justify-between gap-3">
            <div class="w-full lg:w-2/6 flex flex-col p-4">
                <img src="{{ asset(path: 'images/logo.png') }}" alt="" class="w-2/5 mb-4">
                <p class="text-lg text-justify">Sesware Nexus is a dynamic team of software developers and graphic
                    designers dedicated to empowering businesses in Tanzania with cutting-edge technology and creative
                    solutions</p>
            </div>
            <div class="w-full lg:w-1/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-xl">Company</h3>
                <div class="flex flex-col space-y-2 text-lg">
                    <a href="{{ route('about') }}" class="hover:text-slate-400">About</a>
                    <a href="{{ route('works') }}" class="hover:text-slate-400">Featured Projects</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400">Contact Us</a>
                </div>
            </div>
            <div class="w-full lg:w-1/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-xl">Services</h3>
                <div class="flex flex-col space-y-2 text-lg">
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Web App Development</a>
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Mobile Applications</a>
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Graphic Design</a>
                </div>
            </div>
            <div class="w-full lg:w-2/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-xl">Connect With US</h3>
                <div class="flex flex-col space-y-4 text-lg">
                    <a href="" class="hover:text-slate-400">
                        <div class="w-full flex items-center space-x-4">
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                                <i class="fa fa-envelope text-white"></i>
                            </a>
                            <span>info@seswarenexus.com</span>
                        </div>
                    </a>
                    <a href="" class="hover:text-slate-400">
                        <div class="w-full flex items-center space-x-4">
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                                <i class="fa fa-phone  text-white"></i>
                            </a>
                            <span>0712345678</span>
                        </div>
                    </a>
                    <div class="w-full flex items-center md:ml-5 space-x-6">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-x-twitter text-white text-lg"></i>
                        </a>

                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-instagram text-white text-lg"></i>
                        </a>

                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-linkedin-in text-white text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-gray-500 mt-12"></div>
        <div>
            <p class="text-center my-2">&copy; <span>{{ date('Y') }}</span> sesware nexus | All Rights Reserved.
            </p>
        </div>
    </section>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/scipt.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
