@extends('layouts.guest-layout')
@section('content')
    <div class="w-full overflow-hidden bg-no-repeat bg-center bg-cover"
        style="background-image: url('{{ asset('images/sample-bg.jpg') }}')">
        <div class="w-full">
            <div class="w-11/12 md:w-3/5 mx-auto">
                <div class="my-8 text-center">
                    <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                        About Sesware Nexus
                    </h2>
                    <p class="text-2xl my-2 text-gray-700">Your Partner in Digital Transformation</p>
                    <p class="text-lg text-gray-600 mt-4">Sesware Nexus is a dynamic team of software developers and graphic
                        designers dedicated to empowering businesses in Tanzania with cutting-edge technology and creative
                        solutions.</p>
                    <p class="text-lg text-gray-600 mt-4">Founded in 2024, we combine technical expertise with a passion for
                        design to deliver tailored software applications and impactful brand experiences that drive real
                        results.</p>
                    <p class="text-lg text-gray-600 mt-4">We understand the unique challenges and opportunities of the
                        Tanzanian market, and we're committed to helping businesses thrive in the digital age.</p>
                </div>

                <div class="w-fit mx-auto my-4 py-4 ">
                    <a href="#">
                        <button
                            class="py-3 px-4 bg-orange-500 hover:bg-orange-600 rounded-full font-semibold text-xl transition-colors duration-1000 text-white">
                            Explore Our Services
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- our story --}}
    <section class="relative w-full px-6 pt-6 md:px-12 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/KANYASI_66.JPG') }}" alt="Background" class="w-full h-full object-cover opacity-90" />
            <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-50 opacity-90"></div>
        </div>

        <!-- Foreground Content -->
        <div class="relative z-10">
            <div class="w-11/12 md:w-8/12 mx-auto text-center mt-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Story</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">What made Sesware Nexus evolve</p>
            </div>

            <div class="flex w-full flex-col lg:flex-row items-center gap-4">
                <!-- Text Content -->
                <div class="lg:w-[56%]">
                    <div class="my-2 text-justify">
                        <p class="text-lg text-gray-700 mt-1">
                            Sesware Nexus was born from a shared vision among our Founders to bridge the gap between
                            technology
                            and business needs in Tanzania.
                        </p>
                        <p class="text-lg text-gray-700 mt-4">
                            Recognizing the growing demand for customized software solutions and professional graphic
                            design, we
                            established Sesware Nexus in 2024 to provide local businesses with reliable and innovative
                            services.
                        </p>
                        <p class="text-lg text-gray-700 mt-4">
                            From our early projects, we focused on providing software solutions for small to mid-size
                            businesses. Commitment to Quality, Integrity and Collaboration has been a cornerstone of our
                            growth.
                        </p>
                        <p class="text-lg text-gray-700 mt-4">
                            Sesware Nexus is a trusted partner for businesses across different regions and industries in
                            Tanzania, helping them leverage the power of technology and design to achieve their goals.
                        </p>
                    </div>
                    <div class="mt-4">
                        <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-4">Our Pillars</h4>
                        <div class="text-gray-800 flex items-center flex-wrap gap-2">
                            <span
                                class="rounded-full py-1 px-3 border bg-gradient-to-r from-orange-600 to-orange-500 text-white border-orange-700 font-semibold">Innovation</span>
                            <span
                                class="rounded-full py-1 px-3 border bg-gradient-to-r from-orange-600 to-orange-500 text-white border-orange-700 font-semibold">Quality</span>
                            <span
                                class="rounded-full py-1 px-3 border bg-gradient-to-r from-orange-600 to-orange-500 text-white border-orange-700 font-semibold">Collaboration</span>
                            <span
                                class="rounded-full py-1 px-3 border bg-gradient-to-r from-orange-600 to-orange-500 text-white border-orange-700 font-semibold">Integrity</span>
                            <span
                                class="rounded-full py-1 px-3 border bg-gradient-to-r from-orange-600 to-orange-500 text-white border-orange-700 font-semibold">Client
                                Focus</span>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="lg:w-[45%] w-full h-[600px]">
                    <img src="{{ asset('images/us3.png') }}" alt="Profile Image"
                        class="h-full lg:max-h-[600px] w-auto object-contain">
                </div>
            </div>
        </div>
    </section>


    {{-- mission & vision --}}
    <section class="md:py-16">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Mission</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Know What Drives Us</p>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-2 lg:gap-4 text-md">
                <div
                    class="p-6 bg-gradient-to-br from-blue-50 to-blue-200 rounded-2xl shadow-xl shadow-blue-100 transition transform ease-out duration-1000">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-bullseye text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Our Mission</h2>
                            <p class="text-gray-600 text-justify">To deliver exceptional software and design services that
                                exceed client expectations and contribute to the success of businesses in our community.</p>
                        </div>
                    </a>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-50 to-blue-200 rounded-2xl shadow-xl shadow-blue-100 transition transform ease-out duration-1000">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-eye text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Our vision</h2>
                            <p class="text-gray-600 text-justify">To play a key role in driving digital transformation in
                                Tanzania, enabling businesses to compete effectively in the global market.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- team --}}
    <section class="py-8 md:py-16">
        <div class="w-11/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Exceptional Team</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Meet our Professional Team That drives Innovation
                    at Sesware</p>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 text-md">
                <div
                    class="rounded-[5px] overflow-hidden shadow-2xl bg-gradient-to-t from-blue-400 to-blue-50 transition hover:scale-[1.02] duration-300">
                    <!-- Full-Width Image -->
                    <div class="w-full h-60">
                        <img src="{{ asset('images/KANYASI_57.jpg') }}" alt="Profile Image"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="p-4 flex flex-col items-center text-white">
                        <h2 class="text-lg text-center tracking-wide text-gray-900 font-semibold">Suleiman Ramadhan</h2>
                        <p class="italic text-sm text-center text-gray-700">Co-Founder & Lead Software Developer</p>

                        <!-- Social Icons -->
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-950 hover:bg-gray-800 transition duration-300">
                                <i class="fa-brands fa-x-twitter text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 hover:opacity-90 transition duration-300">
                                <i class="fab fa-instagram text-white text-sm"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-[#0077B5] hover:bg-[#005983] transition duration-300">
                                <i class="fa-brands fa-linkedin-in text-white text-sm"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div
                    class="rounded-[5px] overflow-hidden shadow-2xl bg-gradient-to-t from-blue-400 to-blue-50 transition hover:scale-[1.02] duration-300">
                    <!-- Full-Width Image -->
                    <div class="w-full h-60">
                        <img src="{{ asset('images/KANYASI_50.jpg') }}" alt="Profile Image"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="p-4 flex flex-col items-center text-white">
                        <h2 class="text-lg text-center tracking-wide text-gray-900 font-semibold">Erick Manyasi</h2>
                        <p class="italic text-sm text-center text-gray-600">Co-Founder & Lead Software Developer</p>

                        <!-- Social Icons -->
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-950 hover:bg-gray-800 transition duration-300">
                                <i class="fa-brands fa-x-twitter text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 hover:opacity-90 transition duration-300">
                                <i class="fab fa-instagram text-white text-sm"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-[#0077B5] hover:bg-[#005983] transition duration-300">
                                <i class="fa-brands fa-linkedin-in text-white text-sm"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div
                    class="rounded-[5px] overflow-hidden shadow-2xl bg-gradient-to-t from-blue-400 to-blue-50 transition hover:scale-[1.02] duration-300">
                    <!-- Full-Width Image -->
                    <div class="w-full h-60">
                        <img src="{{ asset('images/KANYASI_61.jpg') }}" alt="Profile Image"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="p-4 flex flex-col items-center text-white">
                        <h2 class="text-lg text-center tracking-wide text-gray-900 font-semibold">Said Hassan</h2>
                        <p class="italic text-sm text-center text-gray-600">Co-Founder & Lead Software Developer</p>

                        <!-- Social Icons -->
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-950 hover:bg-gray-800 transition duration-300">
                                <i class="fa-brands fa-x-twitter text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 hover:opacity-90 transition duration-300">
                                <i class="fab fa-instagram text-white text-sm"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-[#0077B5] hover:bg-[#005983] transition duration-300">
                                <i class="fa-brands fa-linkedin-in text-white text-sm"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div
                    class="rounded-[5px] overflow-hidden shadow-2xl bg-gradient-to-t from-blue-400 to-blue-50 transition hover:scale-[1.02] duration-300">
                    <!-- Full-Width Image -->
                    <div class="w-full h-60">
                        <img src="{{ asset('images/KANYASI_61.jpg') }}" alt="Profile Image"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="p-4 flex flex-col items-center text-white">
                        <h2 class="text-lg text-center tracking-wide text-gray-900 font-semibold">Gilbert Amani</h2>
                        <p class="italic text-sm text-center text-gray-600">Senior Graphic Designer</p>

                        <!-- Social Icons -->
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-950 hover:bg-gray-800 transition duration-300">
                                <i class="fa-brands fa-x-twitter text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 hover:opacity-90 transition duration-300">
                                <i class="fab fa-instagram text-white text-sm"></i>
                            </a>

                            <a href="#"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-[#0077B5] hover:bg-[#005983] transition duration-300">
                                <i class="fa-brands fa-linkedin-in text-white text-sm"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partner Action --}}
    <section
        class="mx-auto p-6 md:p-12 flex flex-col md:flex-row my-12 bg-gradient-to-tr from-blue-900 to-blue-950 rounded-sm shadow-2xl text-white">
        <div class="w-full md:w-1/3 my-4 p-4 space-y-6">
            <i class="fa fa-handshake text-4xl md:text-5xl text-orange-400"></i>
            <h3 class="text-2xl md:text-3xl font-bold leading-tight">Partner With Us</h3>

            <div class="w-fit">
                <button
                    class="py-2 px-4 bg-orange-600 hover:bg-orange-700 text-white rounded-full text-lg md:text-xl font-semibold transition-all duration-500 shadow-lg hover:scale-105">
                    Get In Touch
                </button>
            </div>
        </div>

        <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 md:mt-0">
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-puzzle-piece text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    Tailored software and design to meet your unique business needs
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-clock text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    On-time project delivery and ongoing support
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-users text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    We work closely with you to ensure your vision is realized
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-line-chart text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-md font-medium">
                    Delivering solutions that drive measurable business growth
                </span>
            </div>
        </div>
    </section>
    {{-- call to action --}}
    <section class="bg-gray-100">
        <div class="w-full md:w-10/12 mx-auto py-16">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-4">
                <h2 class="text-orange-500 font-bold mb-4 uppercase tracking-wide text-lg md:text-xl">Ready to Transform
                    and
                    Bring Impact to Your Business?</h2>
                <p class="text-lg md:text-5xl font-extrabold text-gray-800">Let's Discuss Your Project</p>
            </div>
            <div class="w-fit my-8 mx-auto">
                <button class="py-4 px-6 bg-blue-900 text-white rounded-full font-semibold text-lg md:text-xl shadow-lg">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>
@endsection