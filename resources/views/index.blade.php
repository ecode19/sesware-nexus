@extends('layouts.guest-layout')
@section('content')
    <div class="w-full  h-[300px] md:h-[400px] lg:h-[560px] overflow-hidden relative">
        <div class="relative w-full h-[300px] md:h-[400px] lg:h-[560px]">
            <img src="{{ asset('images/banner.jpg') }}" alt="" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-blue-300 opacity-50"></div>
        </div>
        <div class="absolute top-[25%] w-full">
            <div class="center-div lg:w-4/5 mx-auto">
                <div class="gap-4 lg:flex lg:flex-col lg:gap-6 text-center text-blue-950" data-aos="fade-up"
                    data-aos-duration="3000">

                    <div class="relative inline-block w-fit mx-auto">
                        <h2 class="text-mobilehead lg:text-6xl font-extrabold font-headimg">
                            <span class="ss"> Your Hub For </span> Smart <span class="text-orange-600">Software</span>
                            Solutions.
                        </h2>

                        <svg class="hidden lg:block lg:absolute lg:left-0 -bottom-2 w-full h-3 lg:h-4 text-orange-600"
                            viewBox="0 0 200 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15 C 50 25, 150 5, 200 15" stroke="currentColor" stroke-width="3"
                                fill="transparent" />
                        </svg>
                    </div>

                    <p class="text-md hidden md:block lg:text-lg">
                        From robust web applications to engaging brand experiences, Sesware Nexus provide the technology
                        and design expertise you need to succeed in today's digital landscape.
                    </p>
                    <div class="w-fit mx-auto">
                        <button
                            class="py-3 px-4 bg-orange-600 text-white hover:bg-blue-900 rounded-full font-semibold text-md transition-colors duration-1000">
                            Get In Touch
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{-- ABOUT --}}
    <section class="px-4 py-10 md:px-20 bg-white font-content">
        <div class="flex flex-col gap-6 md:flex-row items-center">
            <!-- Left Image -->
            <div class="w-full md:w-1/2 hidden md:block" data-aos="fade-right" data-aos-duration="1200">
                <div class="w-full h-83 overflow-hidden rounded-sm">
                    <img src="{{ asset('images/about.jpg') }}" alt="Welcome Image" class="h-full w-full object-cover">
                </div>
            </div>

            <!-- Right Content -->
            <div class="w-full md:w-1/2 text-gray-700 space-y-2" data-aos="fade-up" data-aos-duration="1200">
                <h2 class="text-xl md:text-xl text-blue-900 font-semibold uppercase tracking-wide flex items-center">
                    Welcome to Sesware Nexus
                </h2>
                <hr class="w-10 h-1 bg-orange-600 border-none">
                <p class="text-md text-justify break-all leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dignissimos dolor nesciunt praesentium, recusandae neque alias autem beatae
                    cumque eius vero ratione mollitia quos laboriosam laudantium.
                    Dignissimos dolor nesciunt praesentium, recusandae neque alias autem beatae
                    cumque eius vero ratione mollitia quos laboriosam laudantium.
                    Dignissimos dolor nesciunt praesentium, recusandae neque alias autem beatae
                    cumque eius vero ratione mollitia quos laboriosam laudantium.
                </p>



                <!-- CTA Button -->
                <a href="#"
                    class="inline-block bg-blue-800 hover:bg-blue-900 text-white px-5 py-2.5 text-sm rounded-sm shadow transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>


    {{-- SERVICES --}}
    <section class="md:py-20 bg-gradient-to-br from-blue-50 to-blue-100">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-10">
            {{-- Header --}}
            <div class="w-full md:w-8/12 mx-auto text-center">
                <h2 class="text-orange-600 text-sm font-bold mt-4 lg:mb-0 mb-2 uppercase tracking-widest">Our Services</h2>
                <p class="text-xl md:text-2xl font-semibold text-blue-900 leading-snug">
                    We build custom software solutions that streamline your operations, improve efficiency, and provide
                    valuable insights.
                </p>
            </div>

            {{-- Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1 --}}
                <div
                    class="p-6 bg-gradient-to-br from-blue-800 to-blue-950 rounded-xl shadow-xl hover:scale-105 transition-transform duration-500 text-white">
                    <a href="">
                        <div class="flex flex-col gap-3">
                            <i class="fa fa-globe text-3xl text-orange-400 my-2"></i>
                            <h2 class="text-lg tracking-wide font-semibold">Web Application Development</h2>
                            <p class="text-sm text-blue-100 leading-relaxed text-justify">
                                Designing, developing, and deploying custom web-based software to automate business
                                processes, manage data, and facilitate online transactions.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Card 2 --}}
                <div
                    class="p-6 bg-gradient-to-br from-blue-800 to-blue-950 rounded-xl shadow-xl hover:scale-105 transition-transform duration-500 text-white">
                    <a href="">
                        <div class="flex flex-col gap-3">
                            <i class="fa fa-mobile-phone text-3xl text-orange-400 my-2"></i>
                            <h2 class="text-lg tracking-wide font-semibold">Mobile App Development</h2>
                            <p class="text-sm text-blue-100 leading-relaxed text-justify">
                                Creating native or cross-platform mobile applications for smartphones and tablets to enhance
                                customer engagement.
                            </p>
                        </div>
                    </a>
                </div>

                {{-- Card 3 --}}
                <div
                    class="p-6 bg-gradient-to-br from-blue-800 to-blue-950 rounded-xl shadow-xl hover:scale-105 transition-transform duration-500 text-white">
                    <a href="">
                        <div class="flex flex-col gap-3">
                            <i class="fa fa-palette text-3xl text-orange-400 my-2"></i>
                            <h2 class="text-lg tracking-wide font-semibold">Graphic Design</h2>
                            <p class="text-sm text-blue-100 leading-relaxed text-justify">
                                UI/UX Designing for software applications and websites, developing branding identities, and
                                designing prints and digital marketing materials.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Partner Action --}}
    <section
        class="mx-auto p-6 md:p-12 flex flex-col md:flex-row my-12 bg-gradient-to-tr from-blue-900 to-blue-950 shadow-2xl text-white">
        <div class="w-full md:w-1/3 my-4 p-4 space-y-6">
            <i class="fa fa-handshake text-4xl md:text-5xl text-orange-400"></i>
            <h3 class="text-4xl md:text-3xl font-bold leading-tight">Partner With Us</h3>

            <div class="w-fit">
                <button
                    class="py-2 px-2 bg-orange-600 hover:bg-orange-700 text-white rounded-full text-lg md:text-md font-semibold transition-all duration-500 shadow-lg hover:scale-105">
                    Get In Touch
                </button>
            </div>
        </div>

        <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 md:mt-0">
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-puzzle-piece text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-[15px] font-medium">
                    Tailored software and design to meet your unique business needs
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-clock text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-[15px] font-medium">
                    On-time project delivery and ongoing support
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-users text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-[15px] font-medium">
                    We work closely with you to ensure your vision is realized
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-line-chart text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-[15px] font-medium">
                    Delivering solutions that drive measurable business growth
                </span>
            </div>
        </div>
    </section>

    {{-- Portfolio --}}
    <section class="py-8 md:py-16 bg-white-50">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-orange-600 font-semibold mb-4 uppercase tracking-wide">Featured Projects</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Explore some of our best works that brought
                    impact to businesses</p>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-3 lg:gap-4 text-md">
                <div
                    class="max-w-md mx-auto rounded-[2px] overflow-hidden border border-orange-100 shadow-md hover:shadow-xl transition-all duration-500 group bg-white">

                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/Scolastica-Project.PNG') }}" alt="Scolastica Website Preview"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition duration-500"></div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-medium text-gray-900 tracking-tight">Scolastica School Website</h3>

                        <p class="text-gray-600 text-[16px] leading-relaxed">
                            A clean and responsive website for Scolastica Secondary School in Kilimanjaro. Built for
                            performance, accessibility, and ease of use.
                        </p>

                        <div class="flex items-center justify-between pt-2">
                            <a href="https://scolasticaschool.sc.tz/" target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-900 to-blue-800 text-white text-sm rounded-[2px] shadow hover:shadow-lg hover:scale-105 transition-all duration-500">
                                <span>Visit Site</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div
                    class="max-w-md mx-auto rounded-[2px] overflow-hidden border border-orange-100 shadow-md hover:shadow-xl transition-all duration-500 group">

                    <!-- IMAGE: Full-width, no gap -->
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/ghrtcc-project.PNG') }}" alt="GHRCTT Website Preview"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition duration-500"></div>
                    </div>

                    <div class="p-4 ">
                        <h3 class="text-xl font-medium text-gray-900 tracking-tight">
                            Organization Website
                        </h3>

                        <p class="text-gray-600 text-[16px] leading-relaxed">
                            A clean and professional website for an organization specializing in training, research, and
                            consultancy services.
                        </p>

                        <div class="flex justify-start pt-2">
                            <a href="https://giftedhandsrtcc.or.tz/" target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-900 to-blue-800 text-white text-sm rounded-[2px] shadow hover:shadow-lg hover:scale-105 transition-all duration-500">
                                <span>Visit Site</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-md mx-auto rounded-[2px] overflow-hidden border border-orange-100 shadow-md hover:shadow-xl transition-all duration-500 group bg-white">

                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('images/ghrtcc-project.PNG') }}" alt="GHRCTT Website Preview"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition duration-500"></div>
                    </div>

                    <div class="p-4">
                        <h3 class="text-xl font-medium text-gray-900 tracking-tight">
                            Organization Website
                        </h3>

                        <p class="text-gray-600 text-[16px] leading-relaxed">
                            A clean and professional website for an organization specializing in training, research, and
                            consultancy services.
                        </p>

                        <div class="flex justify-start pt-2">
                            <a href="https://giftedhandsrtcc.or.tz/" target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-900 to-blue-800 text-white text-sm rounded-[2px] shadow hover:shadow-lg hover:scale-105 transition-all duration-500">
                                <span>Visit Site</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

    {{-- tools --}}
    <section class="py-8 md:py-16 bg-white">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-orange-600 font-semibold mb-2 uppercase tracking-wide">tools</h2>
                <p class="text-xl md:text-3xl font-bold text-gray-800">Technologies We Work With</p>
            </div>

            <div class="w-full flex flex-wrap justify-center">
                {{-- Each tool --}}
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <i class="fab fa-react text-5xl text-blue-500"></i>
                        <h2 class="text-lg font-semibold tracking-wide">React</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <i class="fab fa-node-js text-5xl text-green-600"></i>
                        <h2 class="text-lg font-semibold tracking-wide">Node.js</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <i class="fab fa-laravel text-5xl text-red-600"></i>
                        <h2 class="text-lg font-semibold tracking-wide">Laravel</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <i class="fab fa-react text-5xl text-purple-600"></i>
                        <h2 class="text-lg font-semibold tracking-wide">React Native</h2>
                        <p class="text-base text-center">Mobile App</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" class="w-12 h-12"
                            alt="Tailwind CSS" />
                        <h2 class="text-lg font-semibold tracking-wide">Tailwind</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <img src="{{ asset('images/mongodb-4.webp') }}" alt="MongoDB" class="w-14 h-14">
                        <h2 class="text-lg font-semibold tracking-wide">MongoDB</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL" class="w-14 h-14">
                        <h2 class="text-lg font-semibold tracking-wide">mySQL</h2>
                        <p class="text-base">Web Development</p>
                    </div>
                </div>

                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <img src={{asset('images/photoshop.png')}} alt="Adobe" class="w-14 h-14">
                        <h2 class="text-lg font-semibold tracking-wide">Photoshop</h2>
                        <p class="text-base">Graphic Design</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-4">
                    <div
                        class="w-11/12 mx-auto bg-white text-gray-600 flex flex-col items-center space-y-2 p-4 rounded-lg shadow-sm hover:shadow-md hover:scale-105 transition duration-300 ease-in-out">
                        <img src="https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg"
                            alt="Adobe Photoshop" class="w-14 h-14" />
                        <h2 class="text-lg font-semibold tracking-wide">Adobe Illustrator</h2>
                        <p class="text-base">Graphic Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- testimonials --}}
    <section class="mx-auto p-6 md:p-12 mt-12 bg-gradient-to-tl from-blue-50 to-blue-100">
        <div class="flex flex-col md:flex-row flex-wrap w-full md:w-10/12 mx-auto text-gray-700">
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl text-orange-500 font-bold">2024</span>
                <span class="text-xl">Year Founded</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl text-orange-500 font-bold">3+</span>
                <span class="text-xl">Solutions Developed</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl text-orange-500 font-bold">{{ date('Y') - 2024 }}+</span>
                <span class="text-xl">Years of Experience</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl text-orange-500 font-bold">4+</span>
                <span class="text-xl">Technology Experts</span>
            </div>
        </div>

        <div class="w-full md:w-10/12 mx-auto my-4 py-16">
            <div class="w-full flex relative">
                <div class="w-full mx-auto bg-gradient-to-tr from-blue-950 to-blue-900 p-8 rounded-lg text-white slider">
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-1/5">
                                <img src="{{ asset('images/KANYASI_34.jpg') }}" alt="client"
                                    class="h-32 w-32 md:h-40 md:w-40 object-cover rounded-md">
                            </div>
                            <div class="w-full md:w-4/5 flex flex-col justify-center">
                                <p class="text-lg md:text-md break-all text-justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Quisquam
                                    voluptatibus, quos, voluptatum, quisquam voluptatibus quos voluptatum quisquam
                                    voluptatibus quos.</p>
                                <h2 class="text-xl font-semibold mt-4">Client Name</h2>
                                <span class="italic">Manager, MSN Enterprises</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-1/5">
                                <img src="{{ asset('images/KANYASI_36.jpg') }}" alt="client"
                                    class="h-32 w-32 md:h-40 md:w-40 object-cover rounded-md">
                            </div>
                            <div class="w-full md:w-4/5 flex flex-col justify-center">
                                <p class="text-lg md:text-md break-all text-justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Quisquam
                                    voluptatibus, quos, voluptatum, quisquam voluptatibus quos voluptatum quisquam
                                    voluptatibus quos.</p>
                                <h2 class="text-xl font-semibold mt-4">Client Name</h2>
                                <span class="italic">Manager, MSN Enterprises</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit absolute -top-4 -right-4 bg-blue-900 rounded-full p-2"><i
                        class="fa fa-quote-right text-3xl text-white"></i></div>
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
                <p class="text-lg md:text-4xl font-extrabold text-gray-800">Let's Discuss Your Project</p>
            </div>
            <div class="w-fit my-8 mx-auto">
                <button class="py-4 px-6 bg-blue-900 text-white rounded-full font-semibold text-lg md:text-xl shadow-lg">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>
@endsection