@extends('layouts.guest-layout')
@section('content')
    <div class="w-11/12 md:w-3/5 mx-auto">
        <div class="my-8 text-center">
            <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                Our Services
            </h2>
            <p class="text-2xl my-2 text-gray-700">Solutions That Drive Your Business Forward</p>
            <p class="text-lg text-gray-600 mt-4">Sesware Nexus provides a comprehensive suite of software
                development and graphic design services to empower businesses in Tanzania. We combine technical
                expertise with creative vision to deliver solutions that meet your specific needs and drive
                measurable results</p>
        </div>
    </div>

    {{-- software dev --}}
    <section class="w-full bg-gradient-to-r from-blue-50 to-blue-100 px-4 py-16">
        <h3 class="text-blue-900 text-lg text-center font-semibold">Software Development</h3>
        <p class="text-lg text-gray-600 text-center my-2 w-10/12 mx-auto">Sesware Nexus leverages cutting-edge technologies
            to build custom software solutions that streamline your operations, enhance productivity, and provide valuable
            insights.</p>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-tr from-blue-950 to-blue-800 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Web Application Development</h4>
                    <p class="text-justify text-lg">We design, develop, and deploy scalable and secure web applications that
                        automate business processes, manage data effectively, and facilitate online interactions. Our
                        expertise includes e-commerce platforms, content management systems (CMS), customer relationship
                        management (CRM) systems, and custom web portals.</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Increased efficiency and productivity</p>
                    <p class="text-lg">Improved data management</p>
                    <p class="text-lg">Enhanced collaboration</p>
                    <p class="text-lg">Expanded reach to customers</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-[#20232a] shadow-lg flex justify-center items-center">
                                    <i class="fab fa-react text-[#61dafb] text-2xl animate-spin-slow"></i>
                                </div>

                                <h2 class="tracking-wide font-semibold">React</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-[#3C873A] shadow-lg flex justify-center items-center">
                                    <i class="fab fa-node-js text-white text-2xl"></i>
                                </div>
                                <h2 class="tracking-wide font-semibold">Node.js</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-[#FF2D20] shadow-lg flex justify-center items-center">
                                    <i class="fab fa-laravel text-white text-xl"></i>
                                </div>
                                <h2 class="tracking-wide font-semibold">Laravel</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-white shadow-lg flex justify-center items-center">
                                    <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
                                        alt="Tailwind CSS" class="w-6 h-6">
                                </div>
                                <h2 class="tracking-wide font-semibold">Tailwind</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-bootstrap text-xl"></i>
                                <h2 class="tracking-wide font-semibold">Bootstrap</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-[#47A248] shadow-lg flex justify-center items-center">
                                    <i class="fas fa-leaf text-white text-xl"></i>
                                </div>
                                <h2 class="tracking-wide font-semibold">MongoDB</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div class="w-10 h-10 rounded-full bg-white shadow-lg flex justify-center items-center">
                                    <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL"
                                        class="w-6 h-6">
                                </div>
                                <h2 class="tracking-wide font-semibold">mySQL</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="flex items-center flex-wrap gap-3">
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                User-friendly interfaces
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                Database integration
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                API development
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                Responsive design
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-l from-blue-950 to-blue-900 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Mobile App Development</h4>
                    <p class="text-justify text-lg">We create cross-platform mobile applications for Android and iOS
                        devices, enabling you to connect with your customers on the go, provide mobile access to your
                        services, and improve internal communication.</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Enhanced customer engagement</p>
                    <p class="text-lg">Improved accessibility to services</p>
                    <p class="text-lg">Increased brand loyalty</p>
                    <p class="text-lg">Streamlined internal workflows</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/adobe/adobe-icon.svg" class="w-8 h-8"
                                    alt="Adobe" />
                                <h2 class="tracking-wide font-semibold">React Native</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
                                    class="w-8 h-8" alt="Tailwind CSS" />
                                <h2 class="tracking-wide font-semibold">Tailwind</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="{{ asset('images/mongodb-4.webp') }}" alt="" class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">MongoDB</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL"
                                    class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">mySQL</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                Cross-platform Development
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                User-friendly interfaces
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                Push notifications
                            </span>
                            <span
                                class="rounded-full py-1.5 px-4 bg-orange-700 text-white font-medium shadow hover:bg-orange-800 transition-colors duration-300">
                                Integration with device features
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- graphic design --}}
    <section class="w-full px-4 py-8 bg-gradient-to-r from-blue-50 to-blue-100">
        <h3 class="text-blue-900 text-lg text-center font-semibold">Graphic Design</h3>
        <p class="text-lg text-gray-600 text-center my-2 w-10/12 mx-auto">Sesware Nexus creates compelling visual
            experiences that enhance your brand identity, communicate your message effectively, and engage your target
            audience.</p>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-r from-blue-950 to-blue-900 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Graphic Design</h4>
                    <p class="text-justify text-lg">We develop comprehensive brand identities that establish a strong and
                        consistent brand presence across all channels, We design a wide range of marketing materials that
                        effectively communicate your brand message and promote your products or services, and visually
                        appealing user interfaces (UI) and user experiences (UX) for software applications and websites</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Strong brand recognition</p>
                    <p class="text-lg">Consistent brand messaging</p>
                    <p class="text-lg">Enhanced customer engagement</p>
                    <p class="text-lg">Improved user satisfaction</p>
                    <p class="text-lg">Increased user engagement</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <div
                                    class="w-10 h-10 rounded-full bg-[#FF0000] shadow-lg flex justify-center items-center">
                                    <img src="https://www.vectorlogo.zone/logos/adobe/adobe-icon.svg" alt="Adobe"
                                        class="w-6 h-6">
                                </div>

                                <h2 class="tracking-wide font-semibold">Adobe</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Logo design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Brand style
                                guides</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Website design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Print design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">User interface
                                design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Posters</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Banners</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Flyers</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Brochures</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- approach --}}
    <section class="w-full px-4 py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-3xl md:text-4xl text-center font-bold text-blue-900 mb-4">How We Work</h3>
            <p class="text-lg md:text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto">
                We follow a collaborative and iterative approach to ensure we deliver solutions that meet your needs and
                exceed your expectations.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div
                    class="group p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 bg-gradient-to-br from-orange-100 to-white">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-briefcase text-orange-600 text-md"></i>
                        <div>
                            <span class="text-lg md:text-lg font-semibold text-orange-800 mb-2 block">1.
                                Consultation</span>
                            <p class="text-gray-700 text-base md:text-md">We begin by understanding your business goals,
                                requirements, and challenges.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group bg-white p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 bg-gradient-to-br from-orange-50 to-white">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-file-contract text-orange-600 text-md"></i>
                        <div>
                            <span class="text-lg md:text-lg font-semibold text-orange-800 mb-2 block">2.
                                Planning/Discovery</span>
                            <p class="text-gray-700 text-base md:text-md">We develop a detailed project plan, including
                                scope, timeline, and deliverables.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 bg-gradient-to-br from-orange-100 to-white">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-sliders-h text-orange-600 text-md"></i>
                        <div>
                            <span class="text-lg md:text-lg font-semibold text-orange-800 mb-2 block">3.
                                Design/Development</span>
                            <p class="text-gray-700 text-base md:text-md">Our team creates the software or design assets,
                                incorporating your feedback along the way.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="group bg-white p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 bg-gradient-to-br from-orange-50 to-white">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-check-circle text-orange-600 text-md"></i>
                        <div>
                            <span class="text-lg md:text-lg font-semibold text-orange-800 mb-2 block">4.
                                Testing/Review</span>
                            <p class="text-gray-700 text-base md:text-md">We rigorously test our work to ensure quality and
                                functionality.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="group bg-white p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 bg-gradient-to-br from-orange-100 to-white">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-bolt text-orange-600 text-md"></i>
                        <div>
                            <span class="text-lg md:text-lg font-semibold text-orange-800 mb-2 block">5.
                                Delivery/Implementation</span>
                            <p class="text-gray-700 text-base md:text-md">We deliver the final product and provide ongoing
                                support to ensure your success.</p>
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
            <i class="fa fa-handshake text-4xl md:text-6xl text-orange-400"></i>
            <h3 class="text-4xl md:text-5xl font-bold leading-tight">Partner With Us</h3>

            <div class="w-fit">
                <button
                    class="py-3 px-6 bg-orange-600 hover:bg-orange-700 text-white rounded-full text-lg md:text-xl font-semibold transition-all duration-500 shadow-lg hover:scale-105">
                    Get In Touch
                </button>
            </div>
        </div>

        <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 md:mt-0">
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-puzzle-piece text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-lg font-medium">
                    Tailored software and design to meet your unique business needs
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-clock text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-lg font-medium">
                    On-time project delivery and ongoing support
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-users text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-lg font-medium">
                    We work closely with you to ensure your vision is realized
                </span>
            </div>
            <div
                class="flex items-start space-x-4 bg-white bg-opacity-10 border border-orange-500 p-4 rounded-xl shadow-md hover:scale-105 transition-transform duration-500">
                <i class="fa fa-line-chart text-orange-400 text-2xl"></i>
                <span class="text-white text-base md:text-lg font-medium">
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
