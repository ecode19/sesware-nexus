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
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-blue-950 px-4 py-3 lg:px-12 lg:py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="h-10 w-32 bg-contain bg-no-repeat bg-left" style="background-image: url('./images/ses-logo.png');">
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden lg:flex space-x-8 text-white font-medium tracking-wide">
            <li><a href="{{ route('home') }}" class="hover:text-orange-400 transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-orange-400 transition">About</a></li>
            <li><a href="{{ route('service') }}" class="hover:text-orange-400 transition">Services</a></li>
            <li><a href="{{ route('works') }}" class="hover:text-orange-400 transition">Works</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-orange-400 transition">Contact us</a></li>
        </ul>

        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden text-white text-2xl cursor-pointer" onclick="toggleMobileMenu()">
            <i id="menuIcon" class="fa-solid fa-bars"></i>
            {{-- <i id="closeIcon" class="fa-solid fa-x hidden"></i> --}}
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="lg:hidden fixed top-0 left-0 h-full w-[75%] bg-blue-950 text-white px-6 pt-16 space-y-6 transform -translate-x-full transition-transform duration-500 ease-in-out z-40 shadow-lg">
        <a href="{{ route('home') }}"
            class="block text-left text-lg font-medium hover:text-orange-400 transition">Home</a>
        <a href="{{ route('about') }}"
            class="block text-left text-lg font-medium hover:text-orange-400 transition">About</a>
        <a href="{{ route('service') }}"
            class="block text-left text-lg font-medium hover:text-orange-400 transition">Services</a>
        <a href="{{ route('works') }}"
            class="block text-left text-lg font-medium hover:text-orange-400 transition">Works</a>
        <a href="{{ route('contact') }}"
            class="block text-left text-lg font-medium hover:text-orange-400 transition">Contact us</a>
    </div>

    <!-- Overlay (Optional for darkened background) -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-30" onclick="toggleMobileMenu()">
    </div>

    <!-- Script -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById("mobileMenu");
            const overlay = document.getElementById("overlay");
            const menuIcon = document.getElementById("menuIcon");
            const closeIcon = document.getElementById("closeIcon");

            const isOpen = !menu.classList.contains("-translate-x-full");

            menu.classList.toggle("-translate-x-full");
            overlay.classList.toggle("hidden");
            menuIcon.classList.toggle("hidden");
            closeIcon.classList.toggle("hidden");
        }
    </script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    @yield('content')

    {{-- FOOTER --}}
    <section class="w-full p-6  lg:p-12 font-text text-slate-300 bg-gradient-to-r from-blue-950 to-blue-800">
        <div class="flex flex-col lg:flex-row justify-between gap-3">
            <div class="w-full lg:w-2/6 flex flex-col p-4">
                <img src="{{ asset(path: 'images/logo.png') }}" alt="" class="w-2/5 mb-4">
                <p class="text-md text-justify">Sesware Nexus is a dynamic team of software developers and graphic
                    designers dedicated to empowering businesses in Tanzania with cutting-edge technology and creative
                    solutions</p>
            </div>
            <div class="w-full lg:w-1/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-lg">Company</h3>
                <div class="flex flex-col space-y-2 text-md">
                    <a href="{{ route('about') }}" class="hover:text-slate-400">About</a>
                    <a href="{{ route('works') }}" class="hover:text-slate-400">Featured Projects</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400">Contact Us</a>
                </div>
            </div>
            <div class="w-full lg:w-1/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-lg">Services</h3>
                <div class="flex flex-col space-y-2 text-md">
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Web App Development</a>
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Mobile Applications</a>
                    <a href="{{ route('service') }}" class="hover:text-slate-400">Graphic Design</a>
                </div>
            </div>
            <div class="w-full lg:w-2/6 flex flex-col space-y-3 p-4">
                <h3 class="text-white font-semibold text-lg">Connect With US</h3>
                <div class="flex flex-col space-y-3 text-md">
                    <a href="" class="hover:text-slate-400">
                        <div class="w-full flex items-center">
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                                <i class="fa fa-envelope text-white"></i>
                            </a>
                            <span class="mx-4">info@seswarenexus.com</span>
                        </div>
                    </a>
                    <a href="" class="hover:text-slate-400">
                        <div class="w-full flex items-center space-x-4">
                            <i class="fa fa-phone border border-gray-100 hover:bg-blue-900 rounded-full p-2"></i>
                            <span>0712345678</span>
                        </div>
                    </a>
                    <div class="w-full flex items-center space-x-4">
                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-x-twitter text-white"></i>
                        </a>

                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-instagram text-white"></i>
                        </a>

                        <a href="#"
                            class="w-10 h-10 flex items-center justify-center bg-blue-900 rounded-full border border-gray-100">
                            <i class="fa-brands fa-linkedin-in text-white"></i>
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